var express = require('express');
var morgan = require('morgan');
var path = require('path');

var app = express();
app.use(morgan('combined'));

app.get('/', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'index.html'));
});

app.get('/ui/style.css', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'style.css'));
});

app.get('/ui/madi.png', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'madi.png'));
});

app.get('/article-1',function(req,res){
   res.sendFile(path.join(__dirname, 'ui', 'article-1.html')); 
});

app.get('/article-2',function(req,res){
      res.sendFile(path.join(__dirname, 'ui', 'article-2.html')); 
 
});

app.get('/article-3',function(req,res){
   res.send('This is our third Article'); 
});

app.get('/home', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'home.html'));
}); 


app.get('/ui/_1.css', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', '_1.css'));
});

app.get('/ui/slide-show', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'slide-show.html'));
});


app.get('/ui/feedback', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'feedback.html'));
});

app.get('/ui/d-ebook', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'd-ebook.html'));
});

app.get('/ui/sign-up', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'sign-up.html'));
});

app.get('/ui/book', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'book.html'));
});

app.get('/ui/feed', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'feed.html'));
});

var port = 8080; // Use 8080 for local development because you might already have apache running on 80
app.listen(8080, function () {
  console.log(`IMAD course app listening on port ${port}!`);
});
