import pyrebase

config = {

    
    
    "apiKey": "AIzaSyD9XRq9evZY4TSJXtCpwDyvIi0qL2I07Jw",
    'authDomain': "zabardast-54e27.firebaseapp.com",
    'databaseURL': "https://zabardast-54e27.firebaseio.com",
    'projectId': "zabardast-54e27",
    'storageBucket': "zabardast-54e27.appspot.com",
    'messagingSenderId': "186673822506",
    'appId': "1:186673822506:web:05b2a3ad23d3ea9f80bc53",
    'measurementId': "G-TCD0X3QRFL"

}


firebase = pyrebase.initialize_app(config)

auth = firebase.auth()

email = input('Enter Email: ')

password = input('\nEnter Password: ')

user = auth.create_user_with_email_and_password(email,password)
#user = auth.sign_in_with_email_and_password(email,password)
print(auth.get_account_info(user['idToken']))
