<nav>
    <div class="wrapper">
        <div class="nav-left">
            <svg version="1.1" id="Livello_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 168 168" style="enable-background:new 0 0 168 168;" xml:space="preserve">
            <path class="st0" d="M84,0.3C37.7,0.3,0.3,37.8,0.3,84c0,46.3,37.5,83.7,83.7,83.7c46.3,0,83.7-37.5,83.7-83.7
                C167.7,37.8,130.3,0.3,84,0.3C84,0.3,84,0.3,84,0.3z M122.4,121.1c-1.5,2.5-4.7,3.2-7.2,1.7c-19.7-12-44.4-14.7-73.6-8.1
                c-2.8,0.6-5.6-1.1-6.2-3.9c-0.6-2.8,1.1-5.6,3.9-6.3c31.9-7.3,59.3-4.2,81.3,9.3C123.1,115.4,123.9,118.6,122.4,121.1z M132.6,98.3
                c-1.9,3.1-5.9,4-9,2.2c-22.5-13.8-56.8-17.8-83.4-9.8c-3.5,1-7.1-0.9-8.1-4.3c-1-3.5,0.9-7.1,4.4-8.1c30.4-9.2,68.2-4.8,94.1,11.1
                C133.6,91.2,134.5,95.2,132.6,98.3L132.6,98.3z M133.5,74.5c-27-16-71.5-17.5-97.3-9.7c-4.1,1.3-8.5-1.1-9.8-5.2
                c-1.3-4.1,1.1-8.5,5.2-9.8c29.6-9,78.8-7.2,109.8,11.2c3.7,2.2,4.9,7,2.7,10.7C142.1,75.5,137.2,76.7,133.5,74.5L133.5,74.5z"/>
            </svg>
            <h1>Spotify</h1>
        </div>    
        <div class="nav-right">
            <form action="get">
                <select name="genres">
                    <option value="all">Tutti</option>
                    <option v-for="item in genres" :value="item">{{ item }}</option>
                </select>
                <input type="submit" value="Invia">
            </form>
        </div>
    </div>
</nav>