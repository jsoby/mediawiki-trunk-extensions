#ifndef FILTER_EVALUATOR_H
#define FILTER_EVALUATOR_H

#include	<string>
#include	<map>

#include	"aftypes.h"
#include	"parser.h"

namespace afp {

struct filter_evaluator {
	filter_evaluator();

	bool evaluate(std::string const &filter) const;

	void add_variable(std::string const &key, datum value);

private:
	expressor e;
};

} // namespace afp

#endif	/* !FILTER_EVALUATOR_H */
