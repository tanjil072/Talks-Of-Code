



<!DOCTYPE html>
<html lang="en">

<head>
    

<style>
@import url('https://fonts.googleapis.com/css?family=Allura|Josefin+Sans');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body{
  background: #2E2B2B;
  font-family: 'Josefin Sans', sans-serif;
}

.wrapper{
  margin-top: 50px;
}

.wrapper h1{
  font-size: 52px;
  margin-bottom: 100px;
  margin-top:150px;
  text-align: center;

}

.team{
  display: flex;
  justify-content: center;
  width: auto;
  text-align: center;
  flex-wrap: wrap;
}

.team .team_member{
  background: #fff;
  margin: 25px;
  margin-bottom: 50px;
  width: 500px;
  padding: 20px;
  line-height: 20px;
  height:400px;
  color: #8e8b8b;  
  position: relative;
}

.team .team_member h3{
  color: #81c644;
  font-size: 26px;
  margin-top: 50px;
}

.team .team_member p.role{
  color: #ccc;
  margin: 12px 0;
  font-size: 12px;
  text-transform: uppercase;
}

.team .team_member .team_img{
  position: absolute;
  top: -50px;
  left: 50%;
  transform: translateX(-50%);
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background: #fff;
}

.team .team_member .team_img img{
  width: 90px;
  height: 90px;
  padding: 5px;
  border-radius: 100%;
}




</style>
   



</head>

<body>


<div class="wrapper">
  <h1 style="color:white;">Our Team</h1>
  <div class="team">
    <div class="team_member">
      <div class="team_img">
        <img src="images/m1.jfif" alt="Team_image">
      </div>
      <h3 style="color:#F4511E">Abu Ubaida Akash</h3>
      <p class="role">UI developer</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quaerat tempora, voluptatum quas facere dolorum aut cumque nihil nulla harum nemo distinctio quam blanditiis dignissimos.</p>
    </div>
    <div class="team_member">
      <div class="team_img">
        <img style="height: 100px;width:100px;" src="https://cdn.dribbble.com/users/102974/screenshots/2726841/head_bob.gif" alt="Team_image">
      </div>
      <h3 style="color:#F4511E">Dewan Tanjil Hossain</h3>
      <p class="role">Tester</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quaerat tempora, voluptatum quas facere dolorum aut cumque nihil nulla harum nemo distinctio quam blanditiis dignissimos.</p></div>
    
  </div>
</div>




















</body>


</html>