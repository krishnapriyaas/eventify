# Laravel High Load Demo

A Laravel demo project showing scalable backend patterns for high-traffic systems.

## Features
- REST API for savings plans
- Queue-based processing for plan execution
- Cached price lookups
- Service-layer architecture
- Portfolio summary endpoint
- Feature test included

## Tech Stack
- PHP 8+
- Laravel
- MySQL
- Database queues
- Cache
- REST API

## Endpoints
- `POST /api/savings-plans`
- `GET /api/savings-plans/{id}`
- `POST /api/savings-plans/{id}/execute`
- `GET /api/portfolio/{userId}`

## Scalability Considerations
- Background jobs for heavy processing
- Cached price reads
- Indexed database queries
- Separated business logic into services