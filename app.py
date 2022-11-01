from flask import Flask,render_template,request,redirect

app=Flask(__name__)

#route() decorators
@app.route('/')
def home():
  return render_template('index.html')

#@app.route('/index.html')
#def index():
  #return render_template('index.html')

#@app.route('/About.html')
#def about():
    #return render_template('About.html')


if __name__=='__main__':
  app.run(debug=True)
