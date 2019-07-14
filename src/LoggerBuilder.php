<?php
/**
 * PHP Version 7
 *
 * LICENSE:
 * Permission is hereby granted, free of charge, to any
 * person obtaining a copy of this software and associated
 * documentation files (the "Software"), to deal in the
 * Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute,
 * sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall
 * be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 * @category Logging
 * @package  Comertis\Timber
 * @author   Cristian Moraru <cristian@comertis.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @version  GIT: &Id&
 * @link     https://github.com/Comertis/Timber
 */

namespace Comertis\Timber;

use Comertis\Timber\Exceptions\LoggerBuilderException;
use Comertis\Timber\Internal\LoggerConfig;
use Comertis\Timber\Logger;

/**
 * Undocumented class
 *
 * @category Logging
 * @package  Comertis\Timber
 * @author   Cristian Moraru <cristian@comertis.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @version  Release: 1.0.0
 * @link     https://github.com/Comertis/Timber
 */
class LoggerBuilder
{
    /**
     * Logger instances
     *
     * @static
     * @access private
     * @var    Logger[]
     */
    private static $_loggerInstances = [];

    /**
     * LoggerConfig instance
     *
     * @access private
     * @var    LoggerConfig
     */
    private $_config;

    /**
     * Constructor
     *
     * @access private
     */
    private function __construct()
    {
        $this->_config = new LoggerConfig();
    }

    /**
     * Get the LoggerBuilder instance
     *
     * @static
     * @access public
     * @return self
     */
    public static function getInstance()
    {
        return new LoggerBuilder();
    }

    /**
     * Get a previously configured Logger instance
     *
     * @param string $name Logger instance name
     *
     * @static
     * @access public
     * @throws LoggerBuilderException if the name doesn't match any
     *                                configured Logger instances
     * @return Logger
     */
    public static function getLogger($name)
    {
        if (!in_array($name, self::$_loggerInstances)) {
            $error = "No Logger instance with name '$name' has been created";
            throw new LoggerBuilderException($error);
        }

        return self::$_loggerInstances[$name];
    }

    /**
     * Set the output folder for log files
     *
     * @param string $folder Output folder for log files
     *
     * @return self
     */
    public function setOutputFolder($folder)
    {
        $this->_config->setFolder($folder);

        return $this;
    }

    /**
     * Set the log file name
     *
     * @param string $fileName Log file name
     *
     * @access public
     * @return self
     */
    public function setFileName($fileName)
    {
        $this->_config->setFileName($fileName);

        return $this;
    }

    /**
     * Create a new Logger instance
     *
     * @param string $name Instance name
     *
     * @access public
     * @return Logger
     */
    public function build($name)
    {
        if (in_array($name, self::$_loggerInstances)) {
            return self::$_loggerInstances[$name];
        }

        $logger = new Logger($this->_config);
        self::$_loggerInstances[$name] = $logger;

        return $logger;
    }
}

$l = LoggerBuilder::getInstance()
    ->setOutputFolder("")
    ->setFileName("")
    ->build("");
