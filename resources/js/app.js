'use strict';

// import firebase from 'firebase/compat/app';
// import 'firebase/compat/auth';

import { initializeApp  } from 'https://www.gstatic.com/firebasejs/11.3.1/firebase-app.js'
import { getAuth, signInWithPopup, GoogleAuthProvider, signOut, onAuthStateChanged  } from "https://www.gstatic.com/firebasejs/11.3.1/firebase-auth.js";

document.addEventListener("DOMContentLoaded", function () {
  const googleLoginBtns = document.querySelectorAll(".googleLoginBtn");
  const logoutBtns = document.querySelectorAll(".logoutBtn");
  

  const firebaseConfig = {
    apiKey: "AIzaSyDOvbwR0PJIqqlVo5C4fXg_q70GZV21pCI",
    authDomain: "php-firebase-eccomerce.firebaseapp.com",
    databaseURL: "https://php-firebase-eccomerce-default-rtdb.firebaseio.com",
    projectId: "php-firebase-eccomerce",
    storageBucket: "php-firebase-eccomerce.firebasestorage.app",
    messagingSenderId: "84622657006",
    appId: "1:84622657006:web:245ab39cc76c128dadfaff",
    measurementId: "G-SN549TYW4T"
  
  };

  initializeApp(firebaseConfig);

  const auth = getAuth();
  const provider = new GoogleAuthProvider();

  onAuthStateChanged(auth, (user) => {
    if (user) {

      const displayName = user.displayName;
      //const photoURL = user.photoURL; // Fallback image if no profile pic

        // Insert data into the HTML
        document.getElementById("display-name").textContent = "Welcome, " + displayName;
        googleLoginBtns.forEach((btn) => {
          btn.style.visibility="hidden";
        });
        logoutBtns.forEach((btn) => {
          btn.style.visibility="visible";
        });

    } else {
      // Insert data into the HTML
      document.getElementById("display-name").textContent = "";
      googleLoginBtns.forEach((btn) => {
        btn.style.visibility="visible";
      });
      logoutBtns.forEach((btn) => {
        btn.style.visibility="hidden";
      });
    }
  });

  
  googleLoginBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
      //const auth = getAuth();
      //const provider = new GoogleAuthProvider();
      signInWithPopup(auth, provider)
      .then((result) => {
        //const credential = GoogleAuthProvider.credentialFromResult(result);
        //const token = credential.accessToken;
        const token = result.user.accessToken;
        //console.log(result.auth.currentUser.user.accessToken);
        // Send the idToken to your PHP backend
        fetch('login', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json', 'X-Requested-With': 'XMLHttpRequest'
           },
          body: JSON.stringify({ 'token' : token })
        })
        .then((response) => response.json())
        .then((data) => {
          console.log("User Info:", data);})
          .catch(error => console.error("login error:", error ));
    })
      .catch((error) => {
        console.error("Google Sign-In Error:", error);
      });

    })
  });


  logoutBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
        //const auth = getAuth();
        signOut(auth).then(() => {

            // Notify the backend
            fetch('logout', {
                method: 'GET',
                headers: { 'Content-Type': 'application/json', 'X-Requested-With': 'XMLHttpRequest' }
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                //window.location.href = '/'; // Redirect to homepage or login page
            })
            .catch(error => console.error("Logout error:", error ));
        }).catch((error) => {
             console.error("Firebase logout error:", error);
        });
    });
});

})


// mobile menu variables
const mobileMenuOpenBtn = document.querySelectorAll('[data-mobile-menu-open-btn]');
const mobileMenu = document.querySelectorAll('[data-mobile-menu]');
const mobileMenuCloseBtn = document.querySelectorAll('[data-mobile-menu-close-btn]');
//const overlay = document.querySelector('[data-overlay]');

for (let i = 0; i < mobileMenuOpenBtn.length; i++) {

  // mobile menu function
  const mobileMenuCloseFunc = function () {
    mobileMenu[i].classList.remove('active');
    //overlay.classList.remove('active');
  }

  mobileMenuOpenBtn[i].addEventListener('click', function () {
    mobileMenu[i].classList.add('active');
    //overlay.classList.add('active');
  });

  mobileMenuCloseBtn[i].addEventListener('click', mobileMenuCloseFunc);
  //overlay.addEventListener('click', mobileMenuCloseFunc);

}





// accordion variables
const accordionBtn = document.querySelectorAll('[data-accordion-btn]');
const accordion = document.querySelectorAll('[data-accordion]');

for (let i = 0; i < accordionBtn.length; i++) {

  accordionBtn[i].addEventListener('click', function () {

    const clickedBtn = this.nextElementSibling.classList.contains('active');

    for (let i = 0; i < accordion.length; i++) {

      if (clickedBtn) break;

      if (accordion[i].classList.contains('active')) {

        accordion[i].classList.remove('active');
        accordionBtn[i].classList.remove('active');

      }

    }

    this.nextElementSibling.classList.toggle('active');
    this.classList.toggle('active');

  });

}





