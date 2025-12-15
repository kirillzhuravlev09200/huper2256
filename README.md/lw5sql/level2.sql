SELECT u.id, u.name, COALESCE(SUM(o.total), 0) AS total_spent
FROM users u
LEFT JOIN orders o ON u.id = o.user_id
GROUP BY u.id, u.name;

SELECT DISTINCT u.*
FROM users u
JOIN orders o ON u.id = o.user_id;

SELECT u.name, o.total, o.created_at
FROM users u
JOIN orders o ON u.id = o.user_id;
