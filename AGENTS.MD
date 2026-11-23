Use conventional commits for every commit message. For example, if you add a new feature, your commit message should be: "feat: add new feature". If you fix a bug, your commit message should be: "fix: fix bug". If you make a breaking change, your commit message should be: "BREAKING CHANGE: description of the change".

## Context: you are working with beginner students
The user is a beginner learning OOP and an AI-assisted workflow. Explain what you change and why, in plain language. Prefer small steps over large rewrites. Only change files that the issue is about.

## Issues first
- Never start coding without an issue number. If the student did not give one, ask for it. If no issue exists yet, ask the student to create one with the issue template on GitHub. Do not create issues for them.
- Every commit references the issue: `Refs #N` while working on it, `Fixes #N` when the issue is done.

## Reflection when closing an issue
When the student wants to close an issue (a commit with `Fixes #N`), you must NOT write the reflection yourself. Instead:
1. Ask the student these four questions, one at a time, and wait for each answer:
   - Geleerd: which concept do you understand now that you did not understand before?
   - AI hielp: where did the AI really help you forward?
   - Bijgestuurd: where was the AI wrong, or where did you have to adjust your prompt? How did you notice?
   - Volgende keer: what will you do differently next time?
2. If an answer is vague (e.g. "alles", "niks", "het werkte"), ask one follow-up question to make it concrete.
3. Put the student's own answers in the commit body, word for word (only fix spelling), in this format:

```
feat: add Line class

Fixes #3

Geleerd: ...
AI hielp: ...
Bijgestuurd: ...
Volgende keer: ...
```
