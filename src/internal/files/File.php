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

namespace Comertis\Timber\Internal\Files;

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
class File
{
    /**
     * File name
     *
     * @access private
     * @var    string
     */
    private $_name;

    /**
     * File extension
     *
     * @access private
     * @var    string
     */
    private $_extension;

    /**
     * File name + extension
     *
     * @access private
     * @var    string
     */
    private $_fullName;

    /**
     * Constructor
     *
     * @param string $name File name
     */
    public function __construct($name = null)
    {
        if (is_null($name)) {
            return;
        }

        $parts = explode(".", $name);

        if (count($parts) > 1) {
            $extension = array_pop($parts);
            $name = implode(".", $parts);

            $this->setName($name);
            $this->setExtension($extension);
        }
    }

    /**
     * Destructor
     */
    public function __destruct()
    {
        foreach ($this as $key => $value) {
            unset($this->{$key});
        }
    }

    /**
     * Get the file name
     *
     * @access public
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * Set the file name
     *
     * @param string $name File name
     *
     * @access public
     * @return self
     */
    public function setName($name)
    {
        $this->_name = $name;

        return $this;
    }

    /**
     * Get the file extension
     *
     * @access public
     * @return string
     */
    public function getExtension()
    {
        return $this->_extension;
    }

    /**
     * Set the file extension
     *
     * @param string $extension File extension
     *
     * @access public
     * @return self
     */
    public function setExtension($extension)
    {
        $this->_extension = $extension;

        return $this;
    }

    /**
     * Get the file's full name
     *
     * @access public
     * @return string
     */
    public function getFullName()
    {
        if (isset($this->_fullName)) {
            $this->_setFullName();
        }

        return $this->_fullName;
    }

    /**
     * Set the file's full name
     *
     * @access private
     * @return self
     */
    private function _setFullName()
    {
        $this->_fullName = $this->getPath() .
        $this->getName() .
        $this->getExtension();
    }
}
