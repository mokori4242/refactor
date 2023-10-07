import { statement } from '../../invoice';

describe('statement', () => {
    const plays = {
        "hamlet": { "name": "Hamlet", "type": "tragedy" },
        "as-like": { "name": "As You Like it", "type": "comedy" },
        "othello": { "name": "Othello", "type": "tragedy" }
    };

    const invoices = [
        {
            "customer": "BigCo",
            "performances": [
                {
                    "playID": "hamlet",
                    "audience": 55
                },
                {
                    "playID": "as-like",
                    "audience": 35
                },
                {
                    "playID": "othello",
                    "audience": 40
                }
            ]
        }
    ];

    test('statementテスト', () => {
        const invoice = invoices[0];
        const result = statement(invoice, plays);

        console.log(result);
        expect(result).toContain("Statement for BigCo");
        expect(result).toContain("Hamlet: $650.00 (55 seats)");
        expect(result).toContain("As You Like it: $580.00 (35 seats)");
        expect(result).toContain("Othello: $500.00 (40 seats)");
        expect(result).toContain("Amount owed is $1,730.00");
        expect(result).toContain("You earned 47 credits");
    });
});
