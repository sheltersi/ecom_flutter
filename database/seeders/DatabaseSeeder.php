<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        User::factory()->create([
            'name' => 'sher sibs',
            'email' => 'sher@gmail.com',
        ]);

        $fruits = $this->createCategory('Fruits', 'fresh-fruits', [
            ['name' => 'Bananas', 'price' => 29.99, 'unit' => 'kg', 'stock' => 50, 'description' => 'Sweet, ripe Cavendish bananas. Perfect for smoothies or a quick snack.', 'img' => 'product-images/bananas.jpg'],
            ['name' => 'Granny Smith Apples', 'price' => 34.99, 'unit' => 'kg', 'stock' => 40, 'description' => 'Tart and crisp green apples. Ideal for baking, salads, or eating fresh.', 'img' => 'green-apples'],
            ['name' => 'Red Grapes', 'price' => 42.99, 'unit' => 'kg', 'stock' => 30, 'description' => 'Seedless red grapes, juicy and sweet. Great for cheese platters.', 'img' => 'product-images/grapes.jpg'],
            ['name' => 'Oranges', 'price' => 24.99, 'unit' => 'kg', 'stock' => 60, 'description' => 'Juicy navel oranges packed with Vitamin C. Perfect for juicing.', 'img' => 'product-images/oranges.jpg'],
            ['name' => 'Strawberries', 'price' => 54.99, 'unit' => 'punnet', 'stock' => 20, 'description' => 'Fresh locally grown strawberries. Sweet and fragrant.', 'img' => 'product-images/strawberries.jpg'],
            ['name' => 'Avocados', 'price' => 39.99, 'unit' => 'each', 'stock' => 35, 'description' => 'Creamy Hass avocados. Ready to eat in 2-3 days.', 'img' => 'product-images/avocadoes.jpg'],
            ['name' => 'Pineapple', 'price' => 32.99, 'unit' => 'each', 'stock' => 15, 'description' => 'Sweet golden pineapples. Perfect for summer fruit salads.', 'img' => 'product-images/pineapples.jpg'],
            ['name' => 'Blueberries', 'price' => 49.99, 'unit' => 'punnet', 'stock' => 18, 'description' => 'Antioxidant-rich blueberries. Great in breakfast bowls and baking.', 'img' => 'product-images/blueberries.jpg'],
        ]);

        $this->createCategory('Vegetables', 'fresh-vegetables', [
            ['name' => 'Tomatoes', 'price' => 22.99, 'unit' => 'kg', 'stock' => 45, 'description' => 'Ripe red salad tomatoes. Locally grown and full of flavour.', 'img' => 'product-images/tomatoes.jpg'],
            ['name' => 'Onions', 'price' => 18.99, 'unit' => 'kg', 'stock' => 70, 'description' => 'Brown onions — the kitchen staple. Essential for any savoury dish.', 'img' => 'product-images/onions.jpg'],
            ['name' => 'Spinach', 'price' => 19.99, 'unit' => 'bunch', 'stock' => 25, 'description' => 'Fresh spinach leaves. Perfect for salads, smoothies, or steaming.', 'img' => 'product-images/spinach.jpg'],
            ['name' => 'Carrots', 'price' => 16.99, 'unit' => 'kg', 'stock' => 55, 'description' => 'Crunchy sweet carrots. Great raw, roasted, or in soups.', 'img' => 'product-images/carrots.jpg'],
            ['name' => 'Broccoli', 'price' => 28.99, 'unit' => 'head', 'stock' => 20, 'description' => 'Fresh green broccoli crowns. Steam, roast, or stir-fry.', 'img' => 'product-images/brocoli.jpg'],
            ['name' => 'Bell Peppers', 'price' => 35.99, 'unit' => 'kg', 'stock' => 30, 'description' => 'Mixed colour bell peppers. Sweet and crunchy.', 'img' => 'product-images/fresh pepper.jpg'],
            ['name' => 'Potatoes', 'price' => 25.99, 'unit' => 'kg', 'stock' => 80, 'description' => 'Versatile white potatoes. Perfect for mashing, roasting, or chips.', 'img' => 'product-images/potatoes.jpg'],
            ['name' => 'Sweet Potatoes', 'price' => 29.99, 'unit' => 'kg', 'stock' => 40, 'description' => 'Orange-fleshed sweet potatoes. Rich in fibre and flavour.', 'img' => 'product-images/sweet potatoes.jpg'],
        ]);

        $this->createCategory('Dairy', 'dairy-products', [
            ['name' => 'Full Cream Milk', 'price' => 21.99, 'unit' => 'litre', 'stock' => 100, 'description' => 'Fresh full cream milk. Rich and creamy from local dairies.', 'img' => 'product-images/milk.jpg'],
            ['name' => 'Cheddar Cheese', 'price' => 64.99, 'unit' => '200g', 'stock' => 30, 'description' => 'Mature cheddar cheese. Perfect for sandwiches and cooking.', 'img' => 'product-images/cheese.jpg'],
            ['name' => 'Greek Yoghurt', 'price' => 34.99, 'unit' => '500g', 'stock' => 25, 'description' => 'Thick and creamy Greek-style yoghurt. High in protein.', 'img' => 'greek-yogurt'],
            ['name' => 'Salted Butter', 'price' => 49.99, 'unit' => '250g', 'stock' => 35, 'description' => 'Pure salted butter. Essential for baking and spreading.', 'img' => 'product-images/salted butter.jpg'],
            ['name' => 'Eggs (Free Range)', 'price' => 42.99, 'unit' => 'dozen', 'stock' => 40, 'description' => 'Free-range eggs from pasture-raised hens. Rich, golden yolks.', 'img' => 'product-images/eggs.jpg'],
            ['name' => 'Mozzarella', 'price' => 38.99, 'unit' => '200g', 'stock' => 20, 'description' => 'Soft mozzarella. Ideal for pizzas, salads, and pasta bakes.', 'img' => 'mozzarella-cheese'],
        ]);

        $this->createCategory('Bakery', 'bakery-bread', [
            ['name' => 'White Bread', 'price' => 17.99, 'unit' => 'loaf', 'stock' => 60, 'description' => 'Freshly baked white bread. Soft and fluffy everyday loaf.', 'img' => 'white-bread'],
            ['name' => 'Wholewheat Bread', 'price' => 19.99, 'unit' => 'loaf', 'stock' => 45, 'description' => 'Hearty wholewheat bread. High in fibre and freshly baked daily.', 'img' => 'wholewheat-bread'],
            ['name' => 'Croissants', 'price' => 44.99, 'unit' => 'pack of 4', 'stock' => 20, 'description' => 'Buttery French croissants. Flaky, golden, and irresistible.', 'img' => 'croissants'],
            ['name' => 'Blueberry Muffins', 'price' => 39.99, 'unit' => 'pack of 4', 'stock' => 15, 'description' => 'Soft muffins loaded with juicy blueberries.', 'img' => 'blueberry-muffins'],
            ['name' => 'Sourdough Loaf', 'price' => 54.99, 'unit' => 'loaf', 'stock' => 12, 'description' => 'Artisan sourdough with a crisp crust and tangy flavour.', 'img' => 'sourdough-bread'],
            ['name' => 'Rye Bread', 'price' => 29.99, 'unit' => 'loaf', 'stock' => 18, 'description' => 'Dense and flavourful rye bread. Great with cold meats and cheese.', 'img' => 'rye-bread'],
        ]);

        $this->createCategory('Meat & Fish', 'meat-fish', [
            ['name' => 'Chicken Breast', 'price' => 69.99, 'unit' => 'kg', 'stock' => 30, 'description' => 'Boneless skinless chicken breast fillets. Farm-fresh and tender.', 'img' => 'chicken-breast'],
            ['name' => 'Beef Mince', 'price' => 84.99, 'unit' => 'kg', 'stock' => 25, 'description' => 'Lean beef mince. Perfect for burgers, bolognese, and meatballs.', 'img' => 'ground-beef'],
            ['name' => 'Salmon Fillets', 'price' => 149.99, 'unit' => 'kg', 'stock' => 10, 'description' => 'Fresh Atlantic salmon fillets. Rich in Omega-3. Sustainably sourced.', 'img' => 'salmon-fillet'],
            ['name' => 'Pork Chops', 'price' => 74.99, 'unit' => 'kg', 'stock' => 20, 'description' => 'Thick-cut pork chops. Juicy and flavourful when grilled.', 'img' => 'pork-chops'],
            ['name' => 'Hake Fillets', 'price' => 59.99, 'unit' => 'kg', 'stock' => 15, 'description' => 'Locally caught hake. Mild white fish, great for frying or baking.', 'img' => 'white-fish-fillet'],
            ['name' => 'Beef Steak', 'price' => 119.99, 'unit' => 'kg', 'stock' => 12, 'description' => 'Prime rump steak. Aged for tenderness. Best cooked medium-rare.', 'img' => 'beef-steak'],
        ]);

        $this->createCategory('Beverages', 'beverages-drinks', [
            ['name' => 'Orange Juice', 'price' => 34.99, 'unit' => '2L', 'stock' => 50, 'description' => '100% pure squeezed orange juice. No added sugar.', 'img' => 'orange-juice'],
            ['name' => 'Apple Juice', 'price' => 29.99, 'unit' => '2L', 'stock' => 40, 'description' => 'Clear apple juice made from concentrate. Refreshing and crisp.', 'img' => 'apple-juice'],
            ['name' => 'Still Water', 'price' => 12.99, 'unit' => '5L', 'stock' => 120, 'description' => 'Natural spring water. Perfect for home and office.', 'img' => 'water-bottle'],
            ['name' => 'Sparkling Water', 'price' => 16.99, 'unit' => '1.5L', 'stock' => 60, 'description' => 'Carbonated mineral water. Refreshing with a hint of minerals.', 'img' => 'sparkling-water'],
            ['name' => 'Rooibos Tea', 'price' => 39.99, 'unit' => '80 bags', 'stock' => 35, 'description' => 'South African rooibos tea. Caffeine-free and full of antioxidants.', 'img' => 'rooibos-tea'],
            ['name' => 'Ground Coffee', 'price' => 89.99, 'unit' => '250g', 'stock' => 20, 'description' => 'Premium medium roast ground coffee. Rich aroma and smooth taste.', 'img' => 'coffee-beans'],
        ]);

        $this->createCategory('Pantry', 'pantry-staples', [
            ['name' => 'Basmati Rice', 'price' => 44.99, 'unit' => '2kg', 'stock' => 50, 'description' => 'Fragrant long-grain basmati rice. Perfect with curries.', 'img' => 'basmati-rice'],
            ['name' => 'Spaghetti', 'price' => 22.99, 'unit' => '500g', 'stock' => 70, 'description' => 'Durum wheat spaghetti. Cooks to al dente perfection.', 'img' => 'spaghetti-pasta'],
            ['name' => 'Olive Oil', 'price' => 99.99, 'unit' => '750ml', 'stock' => 25, 'description' => 'Extra virgin olive oil. Cold-pressed for maximum flavour.', 'img' => 'olive-oil'],
            ['name' => 'Tomato Sauce', 'price' => 19.99, 'unit' => '410g', 'stock' => 60, 'description' => 'Rich Italian-style tomato and herb pasta sauce.', 'img' => 'tomato-sauce'],
            ['name' => 'White Sugar', 'price' => 32.99, 'unit' => '2kg', 'stock' => 45, 'description' => 'Fine white sugar. Essential for baking and beverages.', 'img' => 'sugar'],
            ['name' => 'Cake Flour', 'price' => 27.99, 'unit' => '2.5kg', 'stock' => 35, 'description' => 'Premium cake flour. Ideal for light, fluffy bakes.', 'img' => 'flour'],
        ]);

        $this->createCategory('Snacks', 'snacks-food', [
            ['name' => 'Potato Chips', 'price' => 18.99, 'unit' => '125g', 'stock' => 80, 'description' => 'Lightly salted crinkle-cut potato chips. Crunchy and addictive.', 'img' => 'potato-chips'],
            ['name' => 'Pretzels', 'price' => 22.99, 'unit' => '200g', 'stock' => 40, 'description' => 'Salted mini pretzels. Perfect party snack.', 'img' => 'pretzels'],
            ['name' => 'Mixed Nuts', 'price' => 69.99, 'unit' => '300g', 'stock' => 25, 'description' => 'Raw mixed nuts — almonds, cashews, pecans, and walnuts.', 'img' => 'mixed-nuts'],
            ['name' => 'Dark Chocolate', 'price' => 39.99, 'unit' => '100g', 'stock' => 30, 'description' => '70% cocoa dark chocolate. Rich and smooth.', 'img' => 'dark-chocolate'],
            ['name' => 'Rice Cakes', 'price' => 16.99, 'unit' => 'pack of 10', 'stock' => 45, 'description' => 'Light and crispy whole grain rice cakes. A healthy snack option.', 'img' => 'rice-cakes'],
            ['name' => 'Biltong', 'price' => 79.99, 'unit' => '200g', 'stock' => 20, 'description' => 'Traditional South African beef biltong. Perfectly spiced.', 'img' => 'biltong'],
        ]);
    }

    private function createCategory(string $name, string $imgQuery, array $products): Category
    {
        $category = Category::create([
            'name' => $name,
            'slug' => Str::slug($name),
            'image' => "https://loremflickr.com/400/400/{$imgQuery}",
        ]);

        foreach ($products as $product) {
            $img = $product['img'];

            if (! str_starts_with($img, 'product-images/')) {
                $img = "https://loremflickr.com/400/400/{$img}";
            }

            Product::create([
                'category_id' => $category->id,
                'name' => $product['name'],
                'slug' => Str::slug($product['name']),
                'price' => $product['price'],
                'unit' => $product['unit'],
                'stock' => $product['stock'],
                'description' => $product['description'],
                'image' => $img,
                'is_active' => true,
            ]);
        }

        return $category;
    }
}
