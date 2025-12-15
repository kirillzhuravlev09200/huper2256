SELECT u.id, u.name, SUM(o.total) AS total_spent
FROM users u
JOIN orders o ON u.id = o.user_id
GROUP BY u.id, u.name
ORDER BY total_spent DESC
LIMIT 3;

SELECT u.id, u.name, AVG(o.total) AS average_order
FROM users u
JOIN orders o ON u.id = o.user_id
GROUP BY u.id, u.name;

SELECT u.*
FROM users u
LEFT JOIN orders o ON u.id = o.user_id
WHERE o.id IS NULL;
