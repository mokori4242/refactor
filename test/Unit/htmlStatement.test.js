import { htmlStatement } from '../../invoice';

describe('htmlStatement', () => {
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

    test('htmlStatementテスト', () => {
        const invoice = invoices[0];
        const result = htmlStatement(invoice, plays);

        console.log(result);
        expect(result).toContain("Statement for BigCo");
        expect(result).toContain("play</th><th>seats</th><th>cost");
        expect(result).toContain("Hamlet</td><td>55</td><td>$650.00");
        expect(result).toContain("As You Like it</td><td>35</td><td>$580.00");
        expect(result).toContain("Othello</td><td>40</td><td>$500.00");
        expect(result).toContain("Amount owed is <em>$1,730.00");
        expect(result).toContain("You earned <em>47</em> credits");
    });
});