<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeviceCertificateSimple implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeviceCertificateSimple';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * certificateId  **参数说明**：设备证书ID。用来唯一标识一个设备证书
    * commonName  **参数说明**：设备证书通用名称。
    * expiryDate  **参数说明**：设备证书过期时间。
    * fingerprint  **参数说明**：设备证书SHA256指纹。
    * status  **参数说明**：设备证书状态，默认状态为激活 - ACTIVE：激活状态。 - INACTIVE：停用状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'certificateId' => 'string',
            'commonName' => 'string',
            'expiryDate' => 'string',
            'fingerprint' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * certificateId  **参数说明**：设备证书ID。用来唯一标识一个设备证书
    * commonName  **参数说明**：设备证书通用名称。
    * expiryDate  **参数说明**：设备证书过期时间。
    * fingerprint  **参数说明**：设备证书SHA256指纹。
    * status  **参数说明**：设备证书状态，默认状态为激活 - ACTIVE：激活状态。 - INACTIVE：停用状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'certificateId' => null,
        'commonName' => null,
        'expiryDate' => null,
        'fingerprint' => null,
        'status' => null
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
    * certificateId  **参数说明**：设备证书ID。用来唯一标识一个设备证书
    * commonName  **参数说明**：设备证书通用名称。
    * expiryDate  **参数说明**：设备证书过期时间。
    * fingerprint  **参数说明**：设备证书SHA256指纹。
    * status  **参数说明**：设备证书状态，默认状态为激活 - ACTIVE：激活状态。 - INACTIVE：停用状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'certificateId' => 'certificate_id',
            'commonName' => 'common_name',
            'expiryDate' => 'expiry_date',
            'fingerprint' => 'fingerprint',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * certificateId  **参数说明**：设备证书ID。用来唯一标识一个设备证书
    * commonName  **参数说明**：设备证书通用名称。
    * expiryDate  **参数说明**：设备证书过期时间。
    * fingerprint  **参数说明**：设备证书SHA256指纹。
    * status  **参数说明**：设备证书状态，默认状态为激活 - ACTIVE：激活状态。 - INACTIVE：停用状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'certificateId' => 'setCertificateId',
            'commonName' => 'setCommonName',
            'expiryDate' => 'setExpiryDate',
            'fingerprint' => 'setFingerprint',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * certificateId  **参数说明**：设备证书ID。用来唯一标识一个设备证书
    * commonName  **参数说明**：设备证书通用名称。
    * expiryDate  **参数说明**：设备证书过期时间。
    * fingerprint  **参数说明**：设备证书SHA256指纹。
    * status  **参数说明**：设备证书状态，默认状态为激活 - ACTIVE：激活状态。 - INACTIVE：停用状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'certificateId' => 'getCertificateId',
            'commonName' => 'getCommonName',
            'expiryDate' => 'getExpiryDate',
            'fingerprint' => 'getFingerprint',
            'status' => 'getStatus'
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
        $this->container['certificateId'] = isset($data['certificateId']) ? $data['certificateId'] : null;
        $this->container['commonName'] = isset($data['commonName']) ? $data['commonName'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
        $this->container['fingerprint'] = isset($data['fingerprint']) ? $data['fingerprint'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['certificateId']) && !preg_match("/^[a-fA-F0-9]{24}$/", $this->container['certificateId'])) {
                $invalidProperties[] = "invalid value for 'certificateId', must be conform to the pattern /^[a-fA-F0-9]{24}$/.";
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
    * Gets certificateId
    *  **参数说明**：设备证书ID。用来唯一标识一个设备证书
    *
    * @return string|null
    */
    public function getCertificateId()
    {
        return $this->container['certificateId'];
    }

    /**
    * Sets certificateId
    *
    * @param string|null $certificateId **参数说明**：设备证书ID。用来唯一标识一个设备证书
    *
    * @return $this
    */
    public function setCertificateId($certificateId)
    {
        $this->container['certificateId'] = $certificateId;
        return $this;
    }

    /**
    * Gets commonName
    *  **参数说明**：设备证书通用名称。
    *
    * @return string|null
    */
    public function getCommonName()
    {
        return $this->container['commonName'];
    }

    /**
    * Sets commonName
    *
    * @param string|null $commonName **参数说明**：设备证书通用名称。
    *
    * @return $this
    */
    public function setCommonName($commonName)
    {
        $this->container['commonName'] = $commonName;
        return $this;
    }

    /**
    * Gets expiryDate
    *  **参数说明**：设备证书过期时间。
    *
    * @return string|null
    */
    public function getExpiryDate()
    {
        return $this->container['expiryDate'];
    }

    /**
    * Sets expiryDate
    *
    * @param string|null $expiryDate **参数说明**：设备证书过期时间。
    *
    * @return $this
    */
    public function setExpiryDate($expiryDate)
    {
        $this->container['expiryDate'] = $expiryDate;
        return $this;
    }

    /**
    * Gets fingerprint
    *  **参数说明**：设备证书SHA256指纹。
    *
    * @return string|null
    */
    public function getFingerprint()
    {
        return $this->container['fingerprint'];
    }

    /**
    * Sets fingerprint
    *
    * @param string|null $fingerprint **参数说明**：设备证书SHA256指纹。
    *
    * @return $this
    */
    public function setFingerprint($fingerprint)
    {
        $this->container['fingerprint'] = $fingerprint;
        return $this;
    }

    /**
    * Gets status
    *  **参数说明**：设备证书状态，默认状态为激活 - ACTIVE：激活状态。 - INACTIVE：停用状态。
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
    * @param string|null $status **参数说明**：设备证书状态，默认状态为激活 - ACTIVE：激活状态。 - INACTIVE：停用状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

