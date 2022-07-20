<style>
    .article-cont {
        display: flex;
        justify-content: center;
        padding-top: 50px;
    }

    .article-content {
        max-width: 1077px;
        width: 100%;

    }

    .categegory-link {
        display: flex;
        justify-content: flex-start;
        margin-bottom: 25px;
    }

    .categegory-link-a {
        text-decoration: none;
        color: #202020;
    }

    .categegory-link-a p {
        letter-spacing: 1.5px;
    }

    .categegory-link-a:hover {
        color: red;
    }

    .title h1 {
        margin: 0px 0px 45px 0px;
        color: #202020;
        line-height: 1.1785714286;
        font-size: 63px;
        font-weight: normal;
        letter-spacing: -1.2px;
    }

    .read-share {
        padding-bottom: 30px;
    }

    .mins-date-share p {
        color: #5f6368;
        font-size: .9em;
    }

    .read-share {
        display: flex;
        justify-content: space-between;
    }

    .article-html {
        line-height: 1.7;
        font-size: 1.1em;
        letter-spacing: .02em;
        font-weight: 390;
        max-width: 830px;
        margin: auto;
    }

    .articleposted a {
        margin-inline: 20px;
        background-color: #ff000021;
        padding: 6px 10px;
        border-radius: 25px;
        color: #b50000;
        text-decoration: none;
        font-size: .9em;
        margin-block: auto;
    }

    .articleposted a:hover {
        margin-inline: 20px;
        background-color: red;
        padding: 6px 10px;
        border-radius: 25px;
        color: white;
        text-decoration: none;
        font-size: .9em;
        margin-block: auto;
    }

    .article-html iframe {
        width: 100%;
        height: 500px;
    }

    .article-html ul {
        padding-inline: 20px;
        list-style: circle;
    }

    .article-html a {
        color: red;
    }

    .article-html table {
        width: 100%;
    }
</style>
<style>
    .related_stories {
        display: flex;
        justify-content: center;
        font-size: 40px;
        margin-block: 50px;
    }

    .more-articles {
        display: flex;
        justify-content: space-evenly;
        padding-inline: 250px;
        margin-bottom: 100px;
    }

    .article-block {
        display: flex;
        flex-direction: column;
        border: 1px solid #00000040;
        width: min-content;
        text-align: left;
        border-radius: 20px;
        margin: 7px;

    }

    .article-block img {
        border-radius: 20px 20px 0px 0px;
        width: 400px;
    }

    .article-block-inner {
        padding: 30px;
        text-transform: uppercase;
    }

    .mobilesmall {
        font-size: 25px;
    }



    
</style>
<style>
    #share ul li {
        margin: auto;
        list-style: none;
        margin-block: 15px;
        text-transform: uppercase;

    }

    #share ul li a {
        text-decoration: none;
    }
</style>
<style>
    .cat-cont {

        display: flex;
        justify-content: center;
        padding-top: 50px;




    }

    .cat-content {

        max-width: 1300px;
        width: 100%;
        color: #202020;
        margin: 0px 14px;
    }

    .cat-title {
        font-size: 63px;
        text-transform: capitalize;
        margin-block: .1em .5em;
        margin-inline: 0px 0px;
    }

    .cat-subtitle {
        font-size: 1.4em;
        font-weight: 380;

    }

    .latestincat {
        margin-top: 2em;
    }

    .latestincat a {
        display: flex;
        text-decoration: underline;
        text-decoration-color: transparent;
        transition: .2s;
    }



    #shrinkgrow {
        width: 100%;
        transition: .2s;
        transform: scale(1);
    }

    .image-grow img:hover {
        transform: scale(1.02);
        transition: .2s;
    }

    .latest-meta {
        margin: 1em 1.3em;
        line-break: auto;
    }

    #latest-meta-title {
        font-size: 3em;
        color: #000000d6;
        margin-bottom: 30px;
        text-decoration: underline;
        transition: .2s;
        text-decoration-color: transparent;
    }

    .latest-meta-subtitle {
        max-width: 320px;
        line-break: anywhere;
        color: #000000d6;
        font-weight: 300;
        text-decoration-thickness: 0px !important;

    }

    .latest-meta-subtitle:hover {
        text-decoration-thickness: 0px !important;

    }

    .arrow {
        display: flex;
        justify-content: end;
        margin-top: 40px;
    }

    .this-related_stories {
        display: flex;
        justify-content: center;
        font-size: 40px;
        margin-block: 50px;
    }

    #this-more-articles {
        display: grid;
        justify-content: space-between;
        grid-template-columns: auto auto auto;
        margin-bottom: 100px;
    }

    .this-article-block {
        display: flex;
        border: 1px solid #00000040;
        width: 400px;
        text-align: left;
        border-radius: 10px;
        height: min-content;
        margin: 10px;
        transition: .2s;
    }

    .this-article-block:hover {
        box-shadow: 0 1px 3px rgba(54, 64, 67, .3), 0 4px 8px 3px rgba(54, 64, 67, .15);
        transition: .2s;
    }

    .this-article-block img {
        border-radius: 20px 20px 0px 0px;
        width: 400px;
    }

    .this-article-block-inner {
        padding: 20px;
        width: 100%;
    }

    .this-mobilesmall {
        font-size: 25px;
    }

    .this-article-content {
        display: flex;
        justify-content: space-between;
    }

    .this-article-content img {
        width: 11em;
        height: auto;
        border-radius: 10px;
    }

    @media all and (max-width: 1285px) {
        .cat-title{
            margin-inline: 0px 14px;
        }
        .cat-cont{
        }
        .cat-content {

            max-width: 1300px !important;
            color: #202020;
            margin: 0px 14px !important;
        }

        .latestincat a {
            display: block;
        }

        #latest-meta-title {
            font-size: 2.2em;
        }

        .arrow {

            margin-top: 10px;
        }

        #this-more-articles {
            grid-template-columns: auto;
        }
        .this-article-block{
            width: 95%;
        }
    }

    @media all and (max-width: 1285px) {
        .article-content {
            margin: 0px 14px;
        }

        .categegory-link-a p {
            font-size: smaller;
        }

        .title h1 {
            font-size: 38px;
        }

        .article-html {
            font-size: 1em;

        }
    }
    @media all and (max-width: 1285px) {
        .related_stories {
            display: flex;
            justify-content: center;
            font-size: 20px;
            margin-block: 50px;
        }

        .more-articles {
            display: flex;
            justify-content: space-evenly;
            padding-inline: 0px;
            margin-bottom: 100px;
            margin-inline: 0%;
            width: 100%;
            flex-direction: column;
        }

        .article-block {
            display: flex;
            flex-direction: column;
            border: 1px solid #00000040;
            text-align: left;
            border-radius: 20px;
            margin: auto;
            margin-bottom: 2em;
        }

        .mobilesmall {
            font-size: 1.5em;
        }



        .article-block-inner {
            padding: 10px 30px;
            text-transform: uppercase;
            font-size: 1em;
        }

        .article-block img {
            width: 22em;
        }
    }
</style>