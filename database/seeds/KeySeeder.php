<?php

use Illuminate\Database\Seeder;

class KeySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keys')->insert([
            'userid' => '1',
            'description' => 'athena@xenon',
            'key' => 'ssh-dss AAAAB3NzaC1kc3MAAAEBALMwbWuSmc/udVNh28XsfmsQUt1DEwk8vCWA6ZMQAd6oqfXHkBmElpE2D0uobJEUiRxM3cb5u2By3pG1NhO8Dy1yiuEDLQbgurZXUDDx4+S8T7a3HQs7q5VvKufyFajRsSn6ECRjFWyjaGHfvK4Ks2D7fAtPV3zFhPXsYom4QOMPDVB1Eea1PcYAAcK53a20WPmLThG+9IxftwrMFvB9UNyOQb1YXVKCRencJmtvCtkZ4/G7Ta61CrSgpiTAZKqKGHJ2uqALVd0PaF6MbJk/DNawIUxBHpmyhxJHZHVJiUvWjgkHzHbz6I5mu/B4WfxfvBnGUZjWlhABn1ijrsa+CAkAAAAVAO6dJeKZ5A7DBh11b0BeHnjiUl3BAAABABjVswuT1cHg50qTwMSynK4jsDxsOV3SXLKYyJJafY9j8BTs5aQE4073Qenhg6Oqo0HuaU5Dv8nT0v+ZWN3zR55+pGAZJiUJtEXIRdyJ1JfxUI/ezmCBLmT1ekHhUPsq6K9M0miqfyluhOsq13BHKAulW9j1TgMkc4/lqLv5uUrNtR+9gHViI/cCjVrSjrdj8AsEMohIME2F9ribwk1l3Swlci5cD4UwhwjwNyU5Yh1CohLZ6EysD83/Vb4ZxUDzkvzo0aHE2RQvfE7i/yV7W3/kQK+Nn47XKZ5ewT/c2fJig1aU02rzgG800+auJfv5F9Pd5LS3kl9hwvUXLCM331QAAAEATEu9RhMRnrJzDtPi7ZCsVYr2ibzJ2T0bwiefnAfpqA1Sd0MwlGRL1gxKCwfUoI0gBOxIeAk7VNMM6ivsVOyIgkCdEHAvvrxs+/I8yrpbqn+GKxExXasptlP8njKa3zfRDdDBwpzuVjMXqsIvFih/0Q63jeahpXmDNrnx7XC8TV36xCOST0hFlwaU2EgXqiBw58MVOd8R7WMveEep+ew07kU4+mAxb0EUfOXrZYbu/fapm0JOl8zFKEGS5yUD8z4m0MSJ8KQVNMuhRFItvBz7FcRsoH8VjRGEnrXVG6/ZQ8Qbo+J3M9dKXHG0GvagnO8UfNeDnKb1xnw3aqWOe2e+dQ==',
        ]);
        DB::table('keys')->insert([
            'userid' => '1',
            'description' => 'athena@mbp',
            'key' => 'ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQCmOhaPp5TGYRcxs0lWGU1LiZh8PsCfuXB3RYDU+UwuKhNY1mYctURETJQ5zug6nn4EKOCH/JWq1DHtwNf6qIZLB3JscgpAV9SJYAiZK7fB+7YWkp3W2LZVgejyDI8xUpKGxskbnxm8W2KKq0uXxgBnugcXrc/QUpepXbuRjItIZdnzyyZ9EFez0XkMrGsMfqDVOMljFIHkKSCV4DZm/X6w2beUUp/yZ1AKv2D4+bOcxuttKlNS5npAc0nZNDDmRYrLT7sy1AYbMUZKDHH7sCQgt3y5rxZx7UJdSaIfgUhHT9XufQ8UVbDjK5Aaaj8IyrMBaxhqlXWZT5N1yWVOzqGH',
        ]);
        DB::table('keys')->insert([
            'userid' => '2',
            'description' => 'wilhelm@android',
            'key' => 'ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQDVa/FZ4OTkFRBgxpfZtujATRpNr8wiU2BvEiXybdjTAJMbWHtqc4/wgZD6wmlnS6k2vvf5G5c31kyqvHBpB5UJtdX901H1jj7ipzSpwIv2WKwLhC+RlCvTX9wC8c9DJHzQLUpjDdVMDbWmg5MBShmI+i6xY7sQ1ZenXh4ZF69GGtPlWd0XFiXbTrXwgZZLmsIj2m8rTPtPToDQGxdjg85a2w+X2OA+ZC3LFlMjzumqFXkqrhI1qsegYNRXVnpZ9M+GZa7O6fMwCNLrGIfPbaZxwXi4BLbCQinHf2JTrnyyU3rZdMvgOVy/wzbSvHeWojciY3grzVpMCU61+ViBkOdH',
        ]);
        DB::table('keys')->insert([
            'userid' => '2',
            'description' => 'wilhelm@mbp',
            'key' => 'ssh-dss AAAAB3NzaC1kc3MAAACBAOkvzOTJ12aTaDI474XljFp7FHVUIZJlSN7Nfn4Ltt0JuUEDCIalKee33aWv6dhhc9w2z6NPgREqsZFAOtKajqI6AwtTMPUhdBrGyFhhJP916Mm0BHNewjFB42L6+RlO5JrXOGqL7Z5iobnK8VgnE/dtCq3IweGaLSy9SL+8VWjPAAAAFQC8Swq+wmYFvfByb/WzxQ1bjIUzcwAAAIEA403q1x8bAI/pHBrKirxRWaIxj2zBa0NpY3hFmj/LWPXqnZn37dqaAHitnW3ia0tqZFKqIAIXONv5rj5fEjKeG6oTlIYPU5jhn2OgBUS05SKbBelHHW4pwb7l5qNPSdIZuWTHJSpgpKgffJFyiG/BUIFyeGUHPCsRRVGXLXDSoQ4AAACBAI46N2v+sb/XUVtHiB6NP9phnY6KvhAfMKh9eFO2VKrazOOrOSj6pi7gKtmREyrHwSgpdy5bMyyNkvtX5O1LAJ39aaKG6Ecj00+HUEWKSjciKpDdxKUNLGOGl4uritLE0aeVZMZ5s3jQBsjHMupvqrXew7ulx03SjAJfdqEGGOIa',
        ]);
        DB::table('keys')->insert([
            'userid' => '3',
            'description' => 'nisha@iphone',
            'key' => 'ssh-dss AAAAB3NzaC1kc3MAAACBAJP7PO8zp66ltrcVgGh0a56vvpU6C05sZDNJB4TLqTr4+HIK9wm6A6ToPCsR6lRfTuQ5yd9Bacm5eUljo6n568WJDRzFOpVnExzlqVqMjiKLo51RFp5L9NeEhKPj3eiZimZigkZ4Q5ZMfG8nKviwtKTksQTkbQjkZyPqvzNsk79dAAAAFQDEc/wSISh1Ze8MU0kSQ4TSJuHJMQAAAIAILjQs8Cp8a67JKLDtFL0WcLmjikQ2ZHwh4y8J+5MFwcrUWmUdstW2KHkuh+0NlNIzZPJYJGIL676UvNyWjrsPtL4sp+DVSNHzv8Wd/b7ihxjzalsETAq1IpUEH5REZoOsRPbdz/pnCXoV1wRsigGoRW1xYgiSJNsEX/MmZj49igAAAIEAioFQDAXexlOs4KZV7QKxm94WAwrlOb4tIx6Yuu2YN5DU4qNML+xRK2GZ8CvXycHVltTJe86/5941U1TMCo95a8WIhrJkK62NJeUcfE5NPKW8vKwP2XXj8nr1taFXWntFiOwBn9y2Ij7p8fsOPC1WvB9ZXVtvm2YE9Kkg1+0IYUk= ',
        ]);
        DB::table('keys')->insert([
            'userid' => '3',
            'description' => 'nisha@macpro',
            'key' => 'ssh-dss AAAAB3NzaC1kc3MAAACBAKlHwWsTKZ1T2UlG1QhRn54mlAAAEHKFrVaZsIncYMPDMfw7crU2qicVPHQTrlvEG5HbVeQ+NqdvIUI5cnG+KaWFVqYnqYQ89LJEg8zUZEWMHafQsR9443j8/XW/SRyfvF5ZM61O3q3zB2iTaliRxRRVfRVD1GZQXLz6w+of82flAAAAFQDl6hD41ebEc5khnkE2Tnbtpq/PTwAAAIA3yIVJP+wZnjORQ3RSRXccRKCE5RBa9/fIcSRoH0PSsPmI9NfxvNrUXbVOwke3ytgTboGjLarxbhapMKxw6bYOH3N+/cpwsLgf+aTlrFLic8ZKl2em1vi5J5OJI1igi7u89YwTL2OduSc5U4A+lm2e6kzXhZZIH+Gxc4WLY4JtVQAAAIAf6vJhieU890HlFZminxc7c7b2N0qFbjTLRVeT+QtD9wzPaY8DyZ57QyDReuJVeYMnMYy6IcYEQz2AOaixsXLs7GUOSPyI1r7KB63zykgu4zM7z6PEIrz1RKCkKU/pAKACI4OAGHEvd0Q6/KcaUt9hJRnDza6aS7azJ4Xn7GRtrw== ',
        ]);
        DB::table('keys')->insert([
            'userid' => '4',
            'description' => 'claptrap@winphone',
            'key' => 'ssh-dss AAAAB3NzaC1kc3MAAACBANnV+Vs6ppbJi1ts2kvNnW4UVJI71ztrW5FUJkvownlftrsqLta2DPKIy6nQ1meqvn+tAF0ZxgcmNk4A8y60EfM DktBuhk/2cYhGbjS6LCF3Kk/O5zxyp1vyLEZNLbb0V7TPsji9DxR756nPYsK1qF/anigmmo79SvgXNFvvK0dxAAAAFQDSSxEPYDxvuCgn4A1dfKSCef J8uQAAAIB4zaNFOFL+Jpy6uqhZeBQ6SG2sx+uiPM0vHynWNZSBUhYpsCC5WyTF1IkcuRFy/rR1DRCNjZwEtJBwVs4Rtx2qxhlg2hfDJQoKDwT5PWs4J 7Rtncyg1krp+LVtOfvwLw2QdQJ4ep08LFvN7D+AGIRGEQQ2bSUbXgBoncltxDPOdQAAAIADO3hPByC13HZhxk6DGf3JK7emsnk7ozny5xqteYd0rBxs foqnPMPcP/1WEwUJbbmbUHi8jKxy7iBIlqq/QERYjfAjqJ3s/i6HEFRCnlhlbuuPGyC9k0m/NSiPGtuVxurf99FvZpZaei5KNqP1z2uwsEmDP2qTP3D E84Zi7obt4A== ',
        ]);
        DB::table('keys')->insert([
            'userid' => '4',
            'description' => 'claptrap@winxp',
            'key' => 'ssh-dss AAAAB3NzaC1kc3MAAACBAPv035OvBWwOiZjsXimm7zUTZ8G/Km4PRhaC8HbCBxpv/Cp7mtW+rwHWFGEcM0ZvVS2nR+aTTo4TBy+/SVfN+9a BWtNXYzgj2rHG2v5EpiEynhoIO8Wp+PD4bGLg6dl/hcEvL/Ed2HZ6nAYADTFdV4UfVwTtHh3MErCxWFJhAbwLAAAAFQDhJqPTjr92kk/n1dEeIMd/fx wKmwAAAIEAj23mEYWkeGjyvfLeVA0sN4/HveoMKJZvb5NiDfn07NAOpgazvhZVLXJoxAZFNAp0YUEjmBfdrJenTmCxZK8f273iVUvJ6jo47zZs5/2OQ zgAVD3tU9bGWUtXFlK66DSdWfA2F7c/5JWwPLzRq2fSmzcHQvQ4qay+D94dEdYcxIYAAACBALa2QbKDZqlGBBai79RiMB3l/SKgmnkCvg1y3ZPAro61 WKU0qGKW42VWLqyNjYue+jsEHY9Nia7kljC/Adj5T5EjmmXWsAzhsPI4uaMLyGVz/beYSM5gUju0tPeAYymObOw24e9PU6g1NeOde2hReM2sDnOfO5Z Zxy+w8sB52H7U ',
        ]);

    }
}
