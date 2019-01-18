$('.title').click(function(e) {
  	e.preventDefault();

    var $this = $(this);

    if ($this.next().hasClass('show')) {
        $this.next().removeClass('show');
        $this.next().slideUp(350);
    } else {
        $this.parent().parent().find('.questions').removeClass('show');
        $this.parent().parent().find('.questions').slideUp(350);
        $this.next().toggleClass('show');
        $this.next().slideToggle(350);
    }
});
