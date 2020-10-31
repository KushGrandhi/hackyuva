from flask import Flask, escape, request, render_template

app = Flask(__name__)
email = ''
password = ''


@app.route('/mentor')
def mentor():
    return render_template('Page1.html')



@app.route('/home', methods=['GET', 'POST'])
def server():
    if request.method == 'POST':
        # Then get the data from the form
        tag = request.form['tag']

        # Get the username/password associated with this tag
        user, password = tag_lookup(tag)

        # Generate just a boring response
        return 'The credentials for %s are %s and %s' % (tag, user, password) 
        # Or you could have a custom template for displaying the info
        # return render_template('asset_information.html',
        #                        username=user, 
        #                        password=password)

    # Otherwise this was a normal GET request
    else:   
        return render_template('home.html')

@app.route('/mentor/select')
def about():
    return render_template('page2.html')

@app.route('/signin')
def signin():
    email = request.form.get("inputEmail")
    password = request.form.get("inputPassword")
    print(email, password)
    return render_template('login.html', email = request.form.get("inputEmail"))

@app.route('/signup')
def signup():
    return render_template('signup.html')

if __name__=='__main__':
    app.run(debug=True)
