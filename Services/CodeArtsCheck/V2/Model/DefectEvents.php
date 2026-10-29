<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DefectEvents implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DefectEvents';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * events  **参数解释：** 调用链信息。
    * description  **参数解释：** 问题详细描述。 **取值范围：** 不涉及。
    * fixSuggestions  **参数解释：** 修复建议。
    * line  **参数解释：** 问题所在文件行号。 **取值范围：** 不涉及。
    * endLine  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * main  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * path  **参数解释：** 文件路径。 **取值范围：** 不涉及。
    * tag  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * mainBuggyCode  **参数解释：** 问题主事件对应的代码片段内容。 **取值范围：** 不涉及。
    * codeContext  **参数解释：** 代码上下文。 **取值范围：** 不涉及。
    * codeContextStartLine  **参数解释：** 代码上下文起始行号。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'events' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\DefectEvents[]',
            'description' => 'string',
            'fixSuggestions' => 'string[]',
            'line' => 'int',
            'endLine' => 'int',
            'main' => 'bool',
            'path' => 'string',
            'tag' => 'string',
            'mainBuggyCode' => 'string',
            'codeContext' => 'string',
            'codeContextStartLine' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * events  **参数解释：** 调用链信息。
    * description  **参数解释：** 问题详细描述。 **取值范围：** 不涉及。
    * fixSuggestions  **参数解释：** 修复建议。
    * line  **参数解释：** 问题所在文件行号。 **取值范围：** 不涉及。
    * endLine  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * main  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * path  **参数解释：** 文件路径。 **取值范围：** 不涉及。
    * tag  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * mainBuggyCode  **参数解释：** 问题主事件对应的代码片段内容。 **取值范围：** 不涉及。
    * codeContext  **参数解释：** 代码上下文。 **取值范围：** 不涉及。
    * codeContextStartLine  **参数解释：** 代码上下文起始行号。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'events' => null,
        'description' => null,
        'fixSuggestions' => null,
        'line' => null,
        'endLine' => null,
        'main' => null,
        'path' => null,
        'tag' => null,
        'mainBuggyCode' => null,
        'codeContext' => null,
        'codeContextStartLine' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * events  **参数解释：** 调用链信息。
    * description  **参数解释：** 问题详细描述。 **取值范围：** 不涉及。
    * fixSuggestions  **参数解释：** 修复建议。
    * line  **参数解释：** 问题所在文件行号。 **取值范围：** 不涉及。
    * endLine  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * main  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * path  **参数解释：** 文件路径。 **取值范围：** 不涉及。
    * tag  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * mainBuggyCode  **参数解释：** 问题主事件对应的代码片段内容。 **取值范围：** 不涉及。
    * codeContext  **参数解释：** 代码上下文。 **取值范围：** 不涉及。
    * codeContextStartLine  **参数解释：** 代码上下文起始行号。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'events' => 'events',
            'description' => 'description',
            'fixSuggestions' => 'fix_suggestions',
            'line' => 'line',
            'endLine' => 'end_line',
            'main' => 'main',
            'path' => 'path',
            'tag' => 'tag',
            'mainBuggyCode' => 'main_buggy_code',
            'codeContext' => 'code_context',
            'codeContextStartLine' => 'code_context_start_line'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * events  **参数解释：** 调用链信息。
    * description  **参数解释：** 问题详细描述。 **取值范围：** 不涉及。
    * fixSuggestions  **参数解释：** 修复建议。
    * line  **参数解释：** 问题所在文件行号。 **取值范围：** 不涉及。
    * endLine  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * main  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * path  **参数解释：** 文件路径。 **取值范围：** 不涉及。
    * tag  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * mainBuggyCode  **参数解释：** 问题主事件对应的代码片段内容。 **取值范围：** 不涉及。
    * codeContext  **参数解释：** 代码上下文。 **取值范围：** 不涉及。
    * codeContextStartLine  **参数解释：** 代码上下文起始行号。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'events' => 'setEvents',
            'description' => 'setDescription',
            'fixSuggestions' => 'setFixSuggestions',
            'line' => 'setLine',
            'endLine' => 'setEndLine',
            'main' => 'setMain',
            'path' => 'setPath',
            'tag' => 'setTag',
            'mainBuggyCode' => 'setMainBuggyCode',
            'codeContext' => 'setCodeContext',
            'codeContextStartLine' => 'setCodeContextStartLine'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * events  **参数解释：** 调用链信息。
    * description  **参数解释：** 问题详细描述。 **取值范围：** 不涉及。
    * fixSuggestions  **参数解释：** 修复建议。
    * line  **参数解释：** 问题所在文件行号。 **取值范围：** 不涉及。
    * endLine  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * main  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * path  **参数解释：** 文件路径。 **取值范围：** 不涉及。
    * tag  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * mainBuggyCode  **参数解释：** 问题主事件对应的代码片段内容。 **取值范围：** 不涉及。
    * codeContext  **参数解释：** 代码上下文。 **取值范围：** 不涉及。
    * codeContextStartLine  **参数解释：** 代码上下文起始行号。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'events' => 'getEvents',
            'description' => 'getDescription',
            'fixSuggestions' => 'getFixSuggestions',
            'line' => 'getLine',
            'endLine' => 'getEndLine',
            'main' => 'getMain',
            'path' => 'getPath',
            'tag' => 'getTag',
            'mainBuggyCode' => 'getMainBuggyCode',
            'codeContext' => 'getCodeContext',
            'codeContextStartLine' => 'getCodeContextStartLine'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['fixSuggestions'] = isset($data['fixSuggestions']) ? $data['fixSuggestions'] : null;
        $this->container['line'] = isset($data['line']) ? $data['line'] : null;
        $this->container['endLine'] = isset($data['endLine']) ? $data['endLine'] : null;
        $this->container['main'] = isset($data['main']) ? $data['main'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['mainBuggyCode'] = isset($data['mainBuggyCode']) ? $data['mainBuggyCode'] : null;
        $this->container['codeContext'] = isset($data['codeContext']) ? $data['codeContext'] : null;
        $this->container['codeContextStartLine'] = isset($data['codeContextStartLine']) ? $data['codeContextStartLine'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets events
    *  **参数解释：** 调用链信息。
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\DefectEvents[]|null
    */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
    * Sets events
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\DefectEvents[]|null $events **参数解释：** 调用链信息。
    *
    * @return $this
    */
    public function setEvents($events)
    {
        $this->container['events'] = $events;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 问题详细描述。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释：** 问题详细描述。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets fixSuggestions
    *  **参数解释：** 修复建议。
    *
    * @return string[]|null
    */
    public function getFixSuggestions()
    {
        return $this->container['fixSuggestions'];
    }

    /**
    * Sets fixSuggestions
    *
    * @param string[]|null $fixSuggestions **参数解释：** 修复建议。
    *
    * @return $this
    */
    public function setFixSuggestions($fixSuggestions)
    {
        $this->container['fixSuggestions'] = $fixSuggestions;
        return $this;
    }

    /**
    * Gets line
    *  **参数解释：** 问题所在文件行号。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getLine()
    {
        return $this->container['line'];
    }

    /**
    * Sets line
    *
    * @param int|null $line **参数解释：** 问题所在文件行号。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setLine($line)
    {
        $this->container['line'] = $line;
        return $this;
    }

    /**
    * Gets endLine
    *  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getEndLine()
    {
        return $this->container['endLine'];
    }

    /**
    * Sets endLine
    *
    * @param int|null $endLine **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setEndLine($endLine)
    {
        $this->container['endLine'] = $endLine;
        return $this;
    }

    /**
    * Gets main
    *  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    *
    * @return bool|null
    */
    public function getMain()
    {
        return $this->container['main'];
    }

    /**
    * Sets main
    *
    * @param bool|null $main **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setMain($main)
    {
        $this->container['main'] = $main;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释：** 文件路径。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path **参数解释：** 文件路径。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets tag
    *  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets mainBuggyCode
    *  **参数解释：** 问题主事件对应的代码片段内容。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getMainBuggyCode()
    {
        return $this->container['mainBuggyCode'];
    }

    /**
    * Sets mainBuggyCode
    *
    * @param string|null $mainBuggyCode **参数解释：** 问题主事件对应的代码片段内容。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setMainBuggyCode($mainBuggyCode)
    {
        $this->container['mainBuggyCode'] = $mainBuggyCode;
        return $this;
    }

    /**
    * Gets codeContext
    *  **参数解释：** 代码上下文。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getCodeContext()
    {
        return $this->container['codeContext'];
    }

    /**
    * Sets codeContext
    *
    * @param string|null $codeContext **参数解释：** 代码上下文。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCodeContext($codeContext)
    {
        $this->container['codeContext'] = $codeContext;
        return $this;
    }

    /**
    * Gets codeContextStartLine
    *  **参数解释：** 代码上下文起始行号。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getCodeContextStartLine()
    {
        return $this->container['codeContextStartLine'];
    }

    /**
    * Sets codeContextStartLine
    *
    * @param int|null $codeContextStartLine **参数解释：** 代码上下文起始行号。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCodeContextStartLine($codeContextStartLine)
    {
        $this->container['codeContextStartLine'] = $codeContextStartLine;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

