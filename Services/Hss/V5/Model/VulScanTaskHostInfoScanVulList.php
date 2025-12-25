<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulScanTaskHostInfoScanVulList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulScanTaskHostInfo_scan_vul_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vulId  **参数解释**: 漏洞id **取值范围**: 字符长度0-256位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-1024位
    * status  **参数解释**: 该漏洞的扫描状态 **取值范围**: - scanning：扫描中 - success：扫描成功 - failed：扫描失败
    * failedReason  **参数解释**: 该漏洞扫描失败的原因，只有扫描失败的漏洞有该字段 **取值范围**: 字符长度0-1024位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vulId' => 'string',
            'vulName' => 'string',
            'status' => 'string',
            'failedReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vulId  **参数解释**: 漏洞id **取值范围**: 字符长度0-256位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-1024位
    * status  **参数解释**: 该漏洞的扫描状态 **取值范围**: - scanning：扫描中 - success：扫描成功 - failed：扫描失败
    * failedReason  **参数解释**: 该漏洞扫描失败的原因，只有扫描失败的漏洞有该字段 **取值范围**: 字符长度0-1024位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vulId' => null,
        'vulName' => null,
        'status' => null,
        'failedReason' => null
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
    * vulId  **参数解释**: 漏洞id **取值范围**: 字符长度0-256位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-1024位
    * status  **参数解释**: 该漏洞的扫描状态 **取值范围**: - scanning：扫描中 - success：扫描成功 - failed：扫描失败
    * failedReason  **参数解释**: 该漏洞扫描失败的原因，只有扫描失败的漏洞有该字段 **取值范围**: 字符长度0-1024位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vulId' => 'vul_id',
            'vulName' => 'vul_name',
            'status' => 'status',
            'failedReason' => 'failed_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vulId  **参数解释**: 漏洞id **取值范围**: 字符长度0-256位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-1024位
    * status  **参数解释**: 该漏洞的扫描状态 **取值范围**: - scanning：扫描中 - success：扫描成功 - failed：扫描失败
    * failedReason  **参数解释**: 该漏洞扫描失败的原因，只有扫描失败的漏洞有该字段 **取值范围**: 字符长度0-1024位
    *
    * @var string[]
    */
    protected static $setters = [
            'vulId' => 'setVulId',
            'vulName' => 'setVulName',
            'status' => 'setStatus',
            'failedReason' => 'setFailedReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vulId  **参数解释**: 漏洞id **取值范围**: 字符长度0-256位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-1024位
    * status  **参数解释**: 该漏洞的扫描状态 **取值范围**: - scanning：扫描中 - success：扫描成功 - failed：扫描失败
    * failedReason  **参数解释**: 该漏洞扫描失败的原因，只有扫描失败的漏洞有该字段 **取值范围**: 字符长度0-1024位
    *
    * @var string[]
    */
    protected static $getters = [
            'vulId' => 'getVulId',
            'vulName' => 'getVulName',
            'status' => 'getStatus',
            'failedReason' => 'getFailedReason'
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
        $this->container['vulId'] = isset($data['vulId']) ? $data['vulId'] : null;
        $this->container['vulName'] = isset($data['vulName']) ? $data['vulName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['failedReason'] = isset($data['failedReason']) ? $data['failedReason'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) > 256)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['failedReason']) && (mb_strlen($this->container['failedReason']) > 1024)) {
                $invalidProperties[] = "invalid value for 'failedReason', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['failedReason']) && (mb_strlen($this->container['failedReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'failedReason', the character length must be bigger than or equal to 0.";
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
    * Gets vulId
    *  **参数解释**: 漏洞id **取值范围**: 字符长度0-256位
    *
    * @return string|null
    */
    public function getVulId()
    {
        return $this->container['vulId'];
    }

    /**
    * Sets vulId
    *
    * @param string|null $vulId **参数解释**: 漏洞id **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setVulId($vulId)
    {
        $this->container['vulId'] = $vulId;
        return $this;
    }

    /**
    * Gets vulName
    *  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-1024位
    *
    * @return string|null
    */
    public function getVulName()
    {
        return $this->container['vulName'];
    }

    /**
    * Sets vulName
    *
    * @param string|null $vulName **参数解释**: 漏洞名称 **取值范围**: 字符长度0-1024位
    *
    * @return $this
    */
    public function setVulName($vulName)
    {
        $this->container['vulName'] = $vulName;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 该漏洞的扫描状态 **取值范围**: - scanning：扫描中 - success：扫描成功 - failed：扫描失败
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**: 该漏洞的扫描状态 **取值范围**: - scanning：扫描中 - success：扫描成功 - failed：扫描失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets failedReason
    *  **参数解释**: 该漏洞扫描失败的原因，只有扫描失败的漏洞有该字段 **取值范围**: 字符长度0-1024位
    *
    * @return string|null
    */
    public function getFailedReason()
    {
        return $this->container['failedReason'];
    }

    /**
    * Sets failedReason
    *
    * @param string|null $failedReason **参数解释**: 该漏洞扫描失败的原因，只有扫描失败的漏洞有该字段 **取值范围**: 字符长度0-1024位
    *
    * @return $this
    */
    public function setFailedReason($failedReason)
    {
        $this->container['failedReason'] = $failedReason;
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

