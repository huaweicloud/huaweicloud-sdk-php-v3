<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulRepairFailedDetailInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulRepairFailedDetailInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * software  **参数解释**: 软件名称 **取值范围**: 字符长度1-512位
    * reason  **参数解释**: 漏洞修复失败原因详情 **取值范围**: 字符长度0-65535位
    * reasonDescribtion  **参数解释**: 漏洞修复失败原因解释说明 **取值范围**: 字符长度0-256位
    * reasonSolution  **参数解释**: 解决方式说明 **取值范围**: 字符长度0-65535位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'software' => 'string',
            'reason' => 'string',
            'reasonDescribtion' => 'string',
            'reasonSolution' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * software  **参数解释**: 软件名称 **取值范围**: 字符长度1-512位
    * reason  **参数解释**: 漏洞修复失败原因详情 **取值范围**: 字符长度0-65535位
    * reasonDescribtion  **参数解释**: 漏洞修复失败原因解释说明 **取值范围**: 字符长度0-256位
    * reasonSolution  **参数解释**: 解决方式说明 **取值范围**: 字符长度0-65535位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'software' => null,
        'reason' => null,
        'reasonDescribtion' => null,
        'reasonSolution' => null
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
    * software  **参数解释**: 软件名称 **取值范围**: 字符长度1-512位
    * reason  **参数解释**: 漏洞修复失败原因详情 **取值范围**: 字符长度0-65535位
    * reasonDescribtion  **参数解释**: 漏洞修复失败原因解释说明 **取值范围**: 字符长度0-256位
    * reasonSolution  **参数解释**: 解决方式说明 **取值范围**: 字符长度0-65535位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'software' => 'software',
            'reason' => 'reason',
            'reasonDescribtion' => 'reason_describtion',
            'reasonSolution' => 'reason_solution'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * software  **参数解释**: 软件名称 **取值范围**: 字符长度1-512位
    * reason  **参数解释**: 漏洞修复失败原因详情 **取值范围**: 字符长度0-65535位
    * reasonDescribtion  **参数解释**: 漏洞修复失败原因解释说明 **取值范围**: 字符长度0-256位
    * reasonSolution  **参数解释**: 解决方式说明 **取值范围**: 字符长度0-65535位
    *
    * @var string[]
    */
    protected static $setters = [
            'software' => 'setSoftware',
            'reason' => 'setReason',
            'reasonDescribtion' => 'setReasonDescribtion',
            'reasonSolution' => 'setReasonSolution'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * software  **参数解释**: 软件名称 **取值范围**: 字符长度1-512位
    * reason  **参数解释**: 漏洞修复失败原因详情 **取值范围**: 字符长度0-65535位
    * reasonDescribtion  **参数解释**: 漏洞修复失败原因解释说明 **取值范围**: 字符长度0-256位
    * reasonSolution  **参数解释**: 解决方式说明 **取值范围**: 字符长度0-65535位
    *
    * @var string[]
    */
    protected static $getters = [
            'software' => 'getSoftware',
            'reason' => 'getReason',
            'reasonDescribtion' => 'getReasonDescribtion',
            'reasonSolution' => 'getReasonSolution'
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
        $this->container['software'] = isset($data['software']) ? $data['software'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['reasonDescribtion'] = isset($data['reasonDescribtion']) ? $data['reasonDescribtion'] : null;
        $this->container['reasonSolution'] = isset($data['reasonSolution']) ? $data['reasonSolution'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['software']) && (mb_strlen($this->container['software']) > 512)) {
                $invalidProperties[] = "invalid value for 'software', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['software']) && (mb_strlen($this->container['software']) < 1)) {
                $invalidProperties[] = "invalid value for 'software', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) > 65535)) {
                $invalidProperties[] = "invalid value for 'reason', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) < 0)) {
                $invalidProperties[] = "invalid value for 'reason', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reasonDescribtion']) && (mb_strlen($this->container['reasonDescribtion']) > 256)) {
                $invalidProperties[] = "invalid value for 'reasonDescribtion', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['reasonDescribtion']) && (mb_strlen($this->container['reasonDescribtion']) < 0)) {
                $invalidProperties[] = "invalid value for 'reasonDescribtion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reasonSolution']) && (mb_strlen($this->container['reasonSolution']) > 65535)) {
                $invalidProperties[] = "invalid value for 'reasonSolution', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['reasonSolution']) && (mb_strlen($this->container['reasonSolution']) < 0)) {
                $invalidProperties[] = "invalid value for 'reasonSolution', the character length must be bigger than or equal to 0.";
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
    * Gets software
    *  **参数解释**: 软件名称 **取值范围**: 字符长度1-512位
    *
    * @return string|null
    */
    public function getSoftware()
    {
        return $this->container['software'];
    }

    /**
    * Sets software
    *
    * @param string|null $software **参数解释**: 软件名称 **取值范围**: 字符长度1-512位
    *
    * @return $this
    */
    public function setSoftware($software)
    {
        $this->container['software'] = $software;
        return $this;
    }

    /**
    * Gets reason
    *  **参数解释**: 漏洞修复失败原因详情 **取值范围**: 字符长度0-65535位
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason **参数解释**: 漏洞修复失败原因详情 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets reasonDescribtion
    *  **参数解释**: 漏洞修复失败原因解释说明 **取值范围**: 字符长度0-256位
    *
    * @return string|null
    */
    public function getReasonDescribtion()
    {
        return $this->container['reasonDescribtion'];
    }

    /**
    * Sets reasonDescribtion
    *
    * @param string|null $reasonDescribtion **参数解释**: 漏洞修复失败原因解释说明 **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setReasonDescribtion($reasonDescribtion)
    {
        $this->container['reasonDescribtion'] = $reasonDescribtion;
        return $this;
    }

    /**
    * Gets reasonSolution
    *  **参数解释**: 解决方式说明 **取值范围**: 字符长度0-65535位
    *
    * @return string|null
    */
    public function getReasonSolution()
    {
        return $this->container['reasonSolution'];
    }

    /**
    * Sets reasonSolution
    *
    * @param string|null $reasonSolution **参数解释**: 解决方式说明 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setReasonSolution($reasonSolution)
    {
        $this->container['reasonSolution'] = $reasonSolution;
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

