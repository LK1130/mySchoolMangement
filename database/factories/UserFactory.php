<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $names = [
            "Pyae Phyo Pai",
            "Choo Pwint Chal",
            "Hein Thant Aung",
            "Suu Yi Min",
            "Moe Swan Htet",
            "Nyan Win Myo",
            "Kyaw Zaw Hein",
            "Thet Wai Yan htet",
            "Hnin Aein Latt",
            "Yunn Shwe Yi Win",
            "ChanMyae Sithu",
            "Aye Nadi Kyaw",
            "Phyu Thin Kyaw",
            "Thazin hlaing",
            "Thae Su Hlaing",
            "Su Nwe Win",
            "Thurein Tun",
            "Sai Kham Lyann",
            "Nyein Nyein Mon",
            "Kyaw Swar Lynn",
            "Thin Nandar Aung",
            "Phone Myat Paing Htoo",
            "Phyo Si Thu",
            "Htet Myat",
            "Htway Su Mon",
            "Yin Kyae Wai",
            "Hlaing Thazin Phoo",
            "Aye Yadanar Oo",
            "Naing Htun",
            "Thuta Nyi Nyi",
            "Yoon Nadi",
            "Myat Noe Khin",
            "Thanzin Aung",
            "Zan Myint Moe",
            "Htet Htet Tun",
            "Maung Thar Kyaw",
            "Lwin Lwin Han",
            "Thet Hmue Bgon",
            "Si Thu",
            "Aung Kaung Moe",
            "Saw Myat Phone Thwe",
            "Zin Mg Mg Htet",
            "Chyu Yati Hlaing Maw",
            "Hnin Theingi Win",
            "Ye Yint Kyaw",
            "Su Myat Mon",
            "Win Myat Thwe",
            "Lwin Oo",
            "Ei Pwint Phyo",
            "Chit Paing Soe",
            "Eaint Myat Chel",
            "Thae Thae Tun",
            "Shwe Sin Ou",
            "Phoo Ei Khaing",
            "Kyi Phyu Oo",
            "Moe Myat Mon",
            "May Thazin",
        ];


        return [
            'name' => $this->faker->unique()->randomElement($names),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'created_by' => 1
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    /**
     * Indicate that the user should have a personal team.
     *
     * @return $this
     */
    public function withPersonalTeam()
    {
        if (!Features::hasTeamFeatures()) {
            return $this->state([]);
        }

        return $this->has(
            Team::factory()
                ->state(function (array $attributes, User $user) {
                    return ['name' => $user->name . '\'s Team', 'user_id' => $user->id, 'personal_team' => true];
                }),
            'ownedTeams'
        );
    }
}
