function mdSwapImage(strImageID, strImageSource)
{
         document.getElementById(strImageID).src = strImageSource;
}

function preloadNav() {
     var i = 0;
     imagesURL = new Array();
     imagesArr = new Array();
     imagesURL[0]="/images/nav/Home_Active.jpg"
     imagesURL[1]="/images/nav/Bio_Active.jpg"
     imagesURL[2]="/images/nav/Test_Active.jpg"
     imagesURL[3]="/images/nav/Services_Active.jpg"
     imagesURL[4]="/images/nav/Blog_Active.jpg"
     imagesURL[5]="/images/nav/Contact_Active.jpg"
     imagesURL[6]="/images/nav/Home.jpg"
     imagesURL[7]="/images/nav/Bio.jpg"
     imagesURL[8]="/images/nav/Test.jpg"
     imagesURL[9]="/images/nav/Services.jpg"
     imagesURL[10]="/images/nav/Blog.jpg"
     imagesURL[11]="/images/nav/Contact.jpg"


     // start preloading
     for(i=0; i<=11; i++)
     {
          imagesArr[i]= new Image();
          imagesArr[i].src=imagesURL[i];
     }
}