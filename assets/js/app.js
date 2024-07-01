// Bookmark Model
var Bookmark = Backbone.Model.extend({
	urlRoot: "/index.php/bookmarks",
});

// Bookmark Collection
var BookmarkList = Backbone.Collection.extend({
	model: Bookmark,
	url: "/index.php/bookmarks",
});

// Bookmark View
var BookmarkView = Backbone.View.extend({
	tagName: "li",
	className: "list-group-item",
	template: _.template($("#bookmark-template").html()),

	events: {
		"click .delete": "deleteBookmark",
	},

	initialize: function () {
		this.listenTo(this.model, "destroy", this.remove);
		this.listenTo(this.model, "change", this.render);
		this.listenTo(this.model, "remove", this.remove);
	},

	render: function () {
		this.$el.html(this.template(this.model.toJSON()));

		return this;
	},

	deleteBookmark: function () {
		this.model.destroy();
	},
});

// App View
var AppView = Backbone.View.extend({
	el: "#bookmark-app",

	events: {
		"submit #add-bookmark-form": "addBookmark",
	},

	initialize: function () {
		this.inputTitle = this.$("#bookmark-title");
		this.inputUrl = this.$("#bookmark-url");
		this.inputTags = this.$("#bookmark-tags");

		this.listenTo(bookmarks, "add", this.addOne);
		this.listenTo(bookmarks, "reset", this.addAll);

		bookmarks.fetch();
	},

	addBookmark: function (e) {
		e.preventDefault();
		bookmarks.create({
			title: this.inputTitle.val().trim(),
			url: this.inputUrl.val().trim(),
			tags: this.inputTags.val().trim(),
		});
		this.inputTitle.val("");
		this.inputUrl.val("");
		this.inputTags.val("");
	},

	addOne: function (bookmark) {
		var view = new BookmarkView({ model: bookmark });
		$("#bookmark-list").append(view.render().el);
	},

	addAll: function () {
		this.$("#bookmark-list").html("");
		bookmarks.each(this.addOne, this);
	},
});

var bookmarks = new BookmarkList();
var app = new AppView();
