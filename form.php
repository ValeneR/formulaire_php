<!DOCTYPE html>
<html>
  <form  action="thanks.php"  method="post">
    <div>
      <label  for="name">Nom :</label>
      <input  type="text"  id="name"  name="user_name">
    </div>
    <div>
      <label  for="firstname">Prénom :</label>
      <input  type="text"  id="firstname"  name="user_firstname">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
      <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
      <label  for="phone_number">Téléphone :</label>
      <input  type="tel"  id="phone_number"  name="user_phone">
    </div>
    <div>
      <label for="subject">Sujet :</label>
      <select name="subject" size=1>
        <option>Commande
        <option>Livraison
        <option>Payement
        <option>Autre
      </select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
</html>
