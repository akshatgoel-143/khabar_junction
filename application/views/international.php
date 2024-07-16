<div>
    <form method="POST" action="<?php echo base_url('international') ?>" class="form-inline mb-3">
        <div class="form-group mr-2">
            <label for="country" class="mr-2">Select Country:</label>
            <select name="country" id="country" class="form-control">
                    <?php
                    
                    $countries = [
                        'ae' => 'United Arab Emirates',
                        'ar' => 'Argentina',
                        'at' => 'Austria',
                        'au' => 'Australia',
                        'be' => 'Belgium',
                        'bg' => 'Bulgaria',
                        'br' => 'Brazil',
                        'ca' => 'Canada',
                        'ch' => 'Switzerland',
                        'cn' => 'China',
                        'co' => 'Colombia',
                        'cu' => 'Cuba',
                        'cz' => 'Czech Republic',
                        'de' => 'Germany',
                        'eg' => 'Egypt',
                        'fr' => 'France',
                        'gb' => 'United Kingdom',
                        'gr' => 'Greece',
                        'hk' => 'Hong Kong',
                        'hu' => 'Hungary',
                        'id' => 'Indonesia',
                        'ie' => 'Ireland',
                        'il' => 'Israel',
                        'in' => 'India',
                        'it' => 'Italy',
                        'jp' => 'Japan',
                        'kr' => 'South Korea',
                        'lt' => 'Lithuania',
                        'lv' => 'Latvia',
                        'ma' => 'Morocco',
                        'mx' => 'Mexico',
                        'my' => 'Malaysia',
                        'ng' => 'Nigeria',
                        'nl' => 'Netherlands',
                        'no' => 'Norway',
                        'nz' => 'New Zealand',
                        'ph' => 'Philippines',
                        'pl' => 'Poland',
                        'pt' => 'Portugal',
                        'ro' => 'Romania',
                        'rs' => 'Serbia',
                        'ru' => 'Russia',
                        'sa' => 'Saudi Arabia',
                        'se' => 'Sweden',
                        'sg' => 'Singapore',
                        'si' => 'Slovenia',
                        'sk' => 'Slovakia',
                        'th' => 'Thailand',
                        'tr' => 'Turkey',
                        'tw' => 'Taiwan',
                        'ua' => 'Ukraine',
                        'us' => 'United States',
                        've' => 'Venezuela',
                        'za' => 'South Africa'
                    ];

                    foreach ($countries as $code => $name) {
                        $selected = ($code == $_GET['country']) ? 'selected' : '';
                        echo "<option value=\"$code\" $selected>$name</option>";
                    }
                    ?>
                </select>

        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>