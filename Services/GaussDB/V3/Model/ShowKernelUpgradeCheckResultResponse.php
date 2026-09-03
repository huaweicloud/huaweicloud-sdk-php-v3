<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowKernelUpgradeCheckResultResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowKernelUpgradeCheckResultResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * upgradePrecheckResult  **参数解释**：  预检查结果。  **取值范围**：  - true：成功。 - false：失败。
    * updatedAt  **参数解释**：  预检查完成时间。  **取值范围**：  格式为UNIX时间戳，单位是毫秒，时区为UTC标准时区。
    * upgradePrecheckDetail  **参数解释**：  实例预检查详情。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'upgradePrecheckResult' => 'string',
            'updatedAt' => 'int',
            'upgradePrecheckDetail' => '\HuaweiCloud\SDK\GaussDB\V3\Model\UpgradeDatabasePrecheckResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * upgradePrecheckResult  **参数解释**：  预检查结果。  **取值范围**：  - true：成功。 - false：失败。
    * updatedAt  **参数解释**：  预检查完成时间。  **取值范围**：  格式为UNIX时间戳，单位是毫秒，时区为UTC标准时区。
    * upgradePrecheckDetail  **参数解释**：  实例预检查详情。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'upgradePrecheckResult' => null,
        'updatedAt' => 'int64',
        'upgradePrecheckDetail' => null
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
    * upgradePrecheckResult  **参数解释**：  预检查结果。  **取值范围**：  - true：成功。 - false：失败。
    * updatedAt  **参数解释**：  预检查完成时间。  **取值范围**：  格式为UNIX时间戳，单位是毫秒，时区为UTC标准时区。
    * upgradePrecheckDetail  **参数解释**：  实例预检查详情。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'upgradePrecheckResult' => 'upgrade_precheck_result',
            'updatedAt' => 'updated_at',
            'upgradePrecheckDetail' => 'upgrade_precheck_detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * upgradePrecheckResult  **参数解释**：  预检查结果。  **取值范围**：  - true：成功。 - false：失败。
    * updatedAt  **参数解释**：  预检查完成时间。  **取值范围**：  格式为UNIX时间戳，单位是毫秒，时区为UTC标准时区。
    * upgradePrecheckDetail  **参数解释**：  实例预检查详情。
    *
    * @var string[]
    */
    protected static $setters = [
            'upgradePrecheckResult' => 'setUpgradePrecheckResult',
            'updatedAt' => 'setUpdatedAt',
            'upgradePrecheckDetail' => 'setUpgradePrecheckDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * upgradePrecheckResult  **参数解释**：  预检查结果。  **取值范围**：  - true：成功。 - false：失败。
    * updatedAt  **参数解释**：  预检查完成时间。  **取值范围**：  格式为UNIX时间戳，单位是毫秒，时区为UTC标准时区。
    * upgradePrecheckDetail  **参数解释**：  实例预检查详情。
    *
    * @var string[]
    */
    protected static $getters = [
            'upgradePrecheckResult' => 'getUpgradePrecheckResult',
            'updatedAt' => 'getUpdatedAt',
            'upgradePrecheckDetail' => 'getUpgradePrecheckDetail'
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
        $this->container['upgradePrecheckResult'] = isset($data['upgradePrecheckResult']) ? $data['upgradePrecheckResult'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['upgradePrecheckDetail'] = isset($data['upgradePrecheckDetail']) ? $data['upgradePrecheckDetail'] : null;
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
    * Gets upgradePrecheckResult
    *  **参数解释**：  预检查结果。  **取值范围**：  - true：成功。 - false：失败。
    *
    * @return string|null
    */
    public function getUpgradePrecheckResult()
    {
        return $this->container['upgradePrecheckResult'];
    }

    /**
    * Sets upgradePrecheckResult
    *
    * @param string|null $upgradePrecheckResult **参数解释**：  预检查结果。  **取值范围**：  - true：成功。 - false：失败。
    *
    * @return $this
    */
    public function setUpgradePrecheckResult($upgradePrecheckResult)
    {
        $this->container['upgradePrecheckResult'] = $upgradePrecheckResult;
        return $this;
    }

    /**
    * Gets updatedAt
    *  **参数解释**：  预检查完成时间。  **取值范围**：  格式为UNIX时间戳，单位是毫秒，时区为UTC标准时区。
    *
    * @return int|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param int|null $updatedAt **参数解释**：  预检查完成时间。  **取值范围**：  格式为UNIX时间戳，单位是毫秒，时区为UTC标准时区。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets upgradePrecheckDetail
    *  **参数解释**：  实例预检查详情。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\UpgradeDatabasePrecheckResult[]|null
    */
    public function getUpgradePrecheckDetail()
    {
        return $this->container['upgradePrecheckDetail'];
    }

    /**
    * Sets upgradePrecheckDetail
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\UpgradeDatabasePrecheckResult[]|null $upgradePrecheckDetail **参数解释**：  实例预检查详情。
    *
    * @return $this
    */
    public function setUpgradePrecheckDetail($upgradePrecheckDetail)
    {
        $this->container['upgradePrecheckDetail'] = $upgradePrecheckDetail;
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

