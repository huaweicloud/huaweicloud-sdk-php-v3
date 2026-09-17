<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchDeletesResponseResultDeleteIssue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchDeletesResponse_result_delete_issue';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * delIssueId  **参数解释：** 删除的工作项id。 **取值范围：** 不涉及。
    * delIssue  **参数解释：** 删除的工作项详情。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'delIssueId' => 'int[]',
            'delIssue' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\BatchDeletesResponseResultDeleteIssueDelIssue[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * delIssueId  **参数解释：** 删除的工作项id。 **取值范围：** 不涉及。
    * delIssue  **参数解释：** 删除的工作项详情。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'delIssueId' => 'int32',
        'delIssue' => null
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
    * delIssueId  **参数解释：** 删除的工作项id。 **取值范围：** 不涉及。
    * delIssue  **参数解释：** 删除的工作项详情。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'delIssueId' => 'del_issue_id',
            'delIssue' => 'del_issue'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * delIssueId  **参数解释：** 删除的工作项id。 **取值范围：** 不涉及。
    * delIssue  **参数解释：** 删除的工作项详情。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'delIssueId' => 'setDelIssueId',
            'delIssue' => 'setDelIssue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * delIssueId  **参数解释：** 删除的工作项id。 **取值范围：** 不涉及。
    * delIssue  **参数解释：** 删除的工作项详情。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'delIssueId' => 'getDelIssueId',
            'delIssue' => 'getDelIssue'
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
        $this->container['delIssueId'] = isset($data['delIssueId']) ? $data['delIssueId'] : null;
        $this->container['delIssue'] = isset($data['delIssue']) ? $data['delIssue'] : null;
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
    * Gets delIssueId
    *  **参数解释：** 删除的工作项id。 **取值范围：** 不涉及。
    *
    * @return int[]|null
    */
    public function getDelIssueId()
    {
        return $this->container['delIssueId'];
    }

    /**
    * Sets delIssueId
    *
    * @param int[]|null $delIssueId **参数解释：** 删除的工作项id。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDelIssueId($delIssueId)
    {
        $this->container['delIssueId'] = $delIssueId;
        return $this;
    }

    /**
    * Gets delIssue
    *  **参数解释：** 删除的工作项详情。 **取值范围：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\BatchDeletesResponseResultDeleteIssueDelIssue[]|null
    */
    public function getDelIssue()
    {
        return $this->container['delIssue'];
    }

    /**
    * Sets delIssue
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\BatchDeletesResponseResultDeleteIssueDelIssue[]|null $delIssue **参数解释：** 删除的工作项详情。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDelIssue($delIssue)
    {
        $this->container['delIssue'] = $delIssue;
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

