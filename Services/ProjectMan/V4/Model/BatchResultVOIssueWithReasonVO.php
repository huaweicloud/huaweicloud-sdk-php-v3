<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchResultVOIssueWithReasonVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchResultVOIssueWithReasonVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * successNum  **参数解释**： 批量操作成功条数。 **取值范围**： 不涉及。
    * failNum  **参数解释**： 批量操作失败条数。 **取值范围**： 不涉及。
    * failed  **参数解释**： 批量操作失败数据及失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'successNum' => 'int',
            'failNum' => 'int',
            'failed' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueWithReasonVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * successNum  **参数解释**： 批量操作成功条数。 **取值范围**： 不涉及。
    * failNum  **参数解释**： 批量操作失败条数。 **取值范围**： 不涉及。
    * failed  **参数解释**： 批量操作失败数据及失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'successNum' => 'int32',
        'failNum' => 'int32',
        'failed' => null
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
    * successNum  **参数解释**： 批量操作成功条数。 **取值范围**： 不涉及。
    * failNum  **参数解释**： 批量操作失败条数。 **取值范围**： 不涉及。
    * failed  **参数解释**： 批量操作失败数据及失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'successNum' => 'success_num',
            'failNum' => 'fail_num',
            'failed' => 'failed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * successNum  **参数解释**： 批量操作成功条数。 **取值范围**： 不涉及。
    * failNum  **参数解释**： 批量操作失败条数。 **取值范围**： 不涉及。
    * failed  **参数解释**： 批量操作失败数据及失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'successNum' => 'setSuccessNum',
            'failNum' => 'setFailNum',
            'failed' => 'setFailed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * successNum  **参数解释**： 批量操作成功条数。 **取值范围**： 不涉及。
    * failNum  **参数解释**： 批量操作失败条数。 **取值范围**： 不涉及。
    * failed  **参数解释**： 批量操作失败数据及失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'successNum' => 'getSuccessNum',
            'failNum' => 'getFailNum',
            'failed' => 'getFailed'
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
        $this->container['successNum'] = isset($data['successNum']) ? $data['successNum'] : null;
        $this->container['failNum'] = isset($data['failNum']) ? $data['failNum'] : null;
        $this->container['failed'] = isset($data['failed']) ? $data['failed'] : null;
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
    * Gets successNum
    *  **参数解释**： 批量操作成功条数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getSuccessNum()
    {
        return $this->container['successNum'];
    }

    /**
    * Sets successNum
    *
    * @param int|null $successNum **参数解释**： 批量操作成功条数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSuccessNum($successNum)
    {
        $this->container['successNum'] = $successNum;
        return $this;
    }

    /**
    * Gets failNum
    *  **参数解释**： 批量操作失败条数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getFailNum()
    {
        return $this->container['failNum'];
    }

    /**
    * Sets failNum
    *
    * @param int|null $failNum **参数解释**： 批量操作失败条数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFailNum($failNum)
    {
        $this->container['failNum'] = $failNum;
        return $this;
    }

    /**
    * Gets failed
    *  **参数解释**： 批量操作失败数据及失败原因。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueWithReasonVO[]|null
    */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /**
    * Sets failed
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueWithReasonVO[]|null $failed **参数解释**： 批量操作失败数据及失败原因。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFailed($failed)
    {
        $this->container['failed'] = $failed;
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

