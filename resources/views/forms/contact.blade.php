<h2 data-subtitle="Witty subtitle">Contact me</h2>
<form>
    <fieldset>
        <legend>How can I help?</legend>
        <label>
            Your name
            <input name="name" placeholder="Name" required />
        </label>
        <label style="width: 60%">
            Looking for
            <select name="service" required>
                <option selected>Brand Identity &amp; Development</option>
            </select>
        </label>
        <label style="width: 40%">
            Needed by
            <input name="date" type="date" placeholder="Date" required />
        </label>
        <label>
            Your email
            <input name="email" placeholder="Email" />
        </label>
        <label>
            Message
            <textarea name="notes" placeholder="Leave me some details"></textarea>
        </label>
    </fieldset>
    <button class="btn primary" type="submit">Get started</button>
</form>
