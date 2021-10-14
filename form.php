<!DOCTYPE html>
<html>
  <form  action="thanks.php"  method="post">
    <div>
      <label  for="name">Nom :</label>
      <input  type="text"  id="name"  name="name" required>
    </div>
    <div>
      <label  for="firstname">Prénom :</label>
      <input  type="text"  id="firstname"  name="firstname" required>
    </div>
    <div>
      <label  for="email">Courriel :</label>
      <input  type="email"  id="email"  name="email" required>
    </div>
    <div>
      <label  for="phone_number">Téléphone :</label>
      <input  type="tel"  id="phone_number"  name="phone_number" required>
    </div>
    <div>
      <label for="subject">Sujet :</label>
      <select name="subject" size=1 required>
        <option>Commande
        <option>Livraison
        <option>Payement
        <option>Autre
      </select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="message" required></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
</html>
