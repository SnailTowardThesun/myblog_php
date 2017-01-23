<div>
    {% for article in articles %}
        <h2>
            <a href="{{ article.url }}">{{ article.title }}</a>
        </h2>
        <p class="lead">
            <a href="{{ article.author_url }} ">{{ article.author }}</a>
        </p>
        <p>
            <span class="glyphicon glyphicon-time"> Posted on {{ article.publish_time }}</span>
        </p>
        <p> Key words:&nbsp
            {% for key in article.key_words %}
                <span class="label label-info">{{ key }}</span>
            {% endfor %}
        </p>
        <hr>
        <img class="img-responsive" src="{{ article.picture_url }}" alt="">
        <hr>
        <p>
            {{ article.content }}
        </p>
        <a class="btn btn-primary" href="{{ article.url }}">
            Read More
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
        <hr>
    {% endfor %}
</div>
