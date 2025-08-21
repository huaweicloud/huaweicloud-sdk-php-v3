<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCommitDiffMetadataResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCommitDiffMetadataResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * diffs  **参数解释：** 差异信息。 **取值范围：** 不涉及。
    * diffRefs  diffRefs
    * addedLines  **参数解释：** 增加行数。
    * removedLines  **参数解释：** 删除行数。
    * changeFileCount  **参数解释：** 修改文件数量。
    * changeLineCount  **参数解释：** 改变行数数量。
    * tooLarge  **参数解释：** 是否为大文件。 **取值范围：** - true，大文件。 - false，非大文件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'diffs' => '\HuaweiCloud\SDK\CodeHub\V4\Model\DiffDto[]',
            'diffRefs' => '\HuaweiCloud\SDK\CodeHub\V4\Model\DiffRefsDto',
            'addedLines' => 'int',
            'removedLines' => 'int',
            'changeFileCount' => 'int',
            'changeLineCount' => 'int',
            'tooLarge' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * diffs  **参数解释：** 差异信息。 **取值范围：** 不涉及。
    * diffRefs  diffRefs
    * addedLines  **参数解释：** 增加行数。
    * removedLines  **参数解释：** 删除行数。
    * changeFileCount  **参数解释：** 修改文件数量。
    * changeLineCount  **参数解释：** 改变行数数量。
    * tooLarge  **参数解释：** 是否为大文件。 **取值范围：** - true，大文件。 - false，非大文件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'diffs' => null,
        'diffRefs' => null,
        'addedLines' => 'int32',
        'removedLines' => 'int32',
        'changeFileCount' => 'int32',
        'changeLineCount' => 'int32',
        'tooLarge' => null
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
    * diffs  **参数解释：** 差异信息。 **取值范围：** 不涉及。
    * diffRefs  diffRefs
    * addedLines  **参数解释：** 增加行数。
    * removedLines  **参数解释：** 删除行数。
    * changeFileCount  **参数解释：** 修改文件数量。
    * changeLineCount  **参数解释：** 改变行数数量。
    * tooLarge  **参数解释：** 是否为大文件。 **取值范围：** - true，大文件。 - false，非大文件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'diffs' => 'diffs',
            'diffRefs' => 'diff_refs',
            'addedLines' => 'added_lines',
            'removedLines' => 'removed_lines',
            'changeFileCount' => 'change_file_count',
            'changeLineCount' => 'change_line_count',
            'tooLarge' => 'too_large'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * diffs  **参数解释：** 差异信息。 **取值范围：** 不涉及。
    * diffRefs  diffRefs
    * addedLines  **参数解释：** 增加行数。
    * removedLines  **参数解释：** 删除行数。
    * changeFileCount  **参数解释：** 修改文件数量。
    * changeLineCount  **参数解释：** 改变行数数量。
    * tooLarge  **参数解释：** 是否为大文件。 **取值范围：** - true，大文件。 - false，非大文件
    *
    * @var string[]
    */
    protected static $setters = [
            'diffs' => 'setDiffs',
            'diffRefs' => 'setDiffRefs',
            'addedLines' => 'setAddedLines',
            'removedLines' => 'setRemovedLines',
            'changeFileCount' => 'setChangeFileCount',
            'changeLineCount' => 'setChangeLineCount',
            'tooLarge' => 'setTooLarge'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * diffs  **参数解释：** 差异信息。 **取值范围：** 不涉及。
    * diffRefs  diffRefs
    * addedLines  **参数解释：** 增加行数。
    * removedLines  **参数解释：** 删除行数。
    * changeFileCount  **参数解释：** 修改文件数量。
    * changeLineCount  **参数解释：** 改变行数数量。
    * tooLarge  **参数解释：** 是否为大文件。 **取值范围：** - true，大文件。 - false，非大文件
    *
    * @var string[]
    */
    protected static $getters = [
            'diffs' => 'getDiffs',
            'diffRefs' => 'getDiffRefs',
            'addedLines' => 'getAddedLines',
            'removedLines' => 'getRemovedLines',
            'changeFileCount' => 'getChangeFileCount',
            'changeLineCount' => 'getChangeLineCount',
            'tooLarge' => 'getTooLarge'
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
        $this->container['diffs'] = isset($data['diffs']) ? $data['diffs'] : null;
        $this->container['diffRefs'] = isset($data['diffRefs']) ? $data['diffRefs'] : null;
        $this->container['addedLines'] = isset($data['addedLines']) ? $data['addedLines'] : null;
        $this->container['removedLines'] = isset($data['removedLines']) ? $data['removedLines'] : null;
        $this->container['changeFileCount'] = isset($data['changeFileCount']) ? $data['changeFileCount'] : null;
        $this->container['changeLineCount'] = isset($data['changeLineCount']) ? $data['changeLineCount'] : null;
        $this->container['tooLarge'] = isset($data['tooLarge']) ? $data['tooLarge'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['addedLines']) && ($this->container['addedLines'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'addedLines', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['addedLines']) && ($this->container['addedLines'] < 0)) {
                $invalidProperties[] = "invalid value for 'addedLines', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['removedLines']) && ($this->container['removedLines'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'removedLines', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['removedLines']) && ($this->container['removedLines'] < 0)) {
                $invalidProperties[] = "invalid value for 'removedLines', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['changeFileCount']) && ($this->container['changeFileCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'changeFileCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['changeFileCount']) && ($this->container['changeFileCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'changeFileCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['changeLineCount']) && ($this->container['changeLineCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'changeLineCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['changeLineCount']) && ($this->container['changeLineCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'changeLineCount', must be bigger than or equal to 0.";
            }
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
    * Gets diffs
    *  **参数解释：** 差异信息。 **取值范围：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\DiffDto[]|null
    */
    public function getDiffs()
    {
        return $this->container['diffs'];
    }

    /**
    * Sets diffs
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\DiffDto[]|null $diffs **参数解释：** 差异信息。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDiffs($diffs)
    {
        $this->container['diffs'] = $diffs;
        return $this;
    }

    /**
    * Gets diffRefs
    *  diffRefs
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\DiffRefsDto|null
    */
    public function getDiffRefs()
    {
        return $this->container['diffRefs'];
    }

    /**
    * Sets diffRefs
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\DiffRefsDto|null $diffRefs diffRefs
    *
    * @return $this
    */
    public function setDiffRefs($diffRefs)
    {
        $this->container['diffRefs'] = $diffRefs;
        return $this;
    }

    /**
    * Gets addedLines
    *  **参数解释：** 增加行数。
    *
    * @return int|null
    */
    public function getAddedLines()
    {
        return $this->container['addedLines'];
    }

    /**
    * Sets addedLines
    *
    * @param int|null $addedLines **参数解释：** 增加行数。
    *
    * @return $this
    */
    public function setAddedLines($addedLines)
    {
        $this->container['addedLines'] = $addedLines;
        return $this;
    }

    /**
    * Gets removedLines
    *  **参数解释：** 删除行数。
    *
    * @return int|null
    */
    public function getRemovedLines()
    {
        return $this->container['removedLines'];
    }

    /**
    * Sets removedLines
    *
    * @param int|null $removedLines **参数解释：** 删除行数。
    *
    * @return $this
    */
    public function setRemovedLines($removedLines)
    {
        $this->container['removedLines'] = $removedLines;
        return $this;
    }

    /**
    * Gets changeFileCount
    *  **参数解释：** 修改文件数量。
    *
    * @return int|null
    */
    public function getChangeFileCount()
    {
        return $this->container['changeFileCount'];
    }

    /**
    * Sets changeFileCount
    *
    * @param int|null $changeFileCount **参数解释：** 修改文件数量。
    *
    * @return $this
    */
    public function setChangeFileCount($changeFileCount)
    {
        $this->container['changeFileCount'] = $changeFileCount;
        return $this;
    }

    /**
    * Gets changeLineCount
    *  **参数解释：** 改变行数数量。
    *
    * @return int|null
    */
    public function getChangeLineCount()
    {
        return $this->container['changeLineCount'];
    }

    /**
    * Sets changeLineCount
    *
    * @param int|null $changeLineCount **参数解释：** 改变行数数量。
    *
    * @return $this
    */
    public function setChangeLineCount($changeLineCount)
    {
        $this->container['changeLineCount'] = $changeLineCount;
        return $this;
    }

    /**
    * Gets tooLarge
    *  **参数解释：** 是否为大文件。 **取值范围：** - true，大文件。 - false，非大文件
    *
    * @return bool|null
    */
    public function getTooLarge()
    {
        return $this->container['tooLarge'];
    }

    /**
    * Sets tooLarge
    *
    * @param bool|null $tooLarge **参数解释：** 是否为大文件。 **取值范围：** - true，大文件。 - false，非大文件
    *
    * @return $this
    */
    public function setTooLarge($tooLarge)
    {
        $this->container['tooLarge'] = $tooLarge;
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

