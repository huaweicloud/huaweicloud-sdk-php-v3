<?php

namespace HuaweiCloud\SDK\Ccm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCrlConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCrlConfiguration';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enabled  是否启用CRL发布功能。 - **true** - **false**
    * crlName  吊销列表文件名称。 > 若用户不指定，系统将默认采用当前证书的父CA ID。
    * obsBucketName  OBS桶名称。
    * validDays  CRL更新周期，单位为\"天\"。当启用CRL发布功能，为必填项。
    * crlDisPoint  吊销列表分发地址，即对应的OBS桶中的CRL文件地址。 > 本参数由程序根据crl_name、obs_bucket_name以及OBS地址进行拼接而成。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enabled' => 'bool',
            'crlName' => 'string',
            'obsBucketName' => 'string',
            'validDays' => 'int',
            'crlDisPoint' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enabled  是否启用CRL发布功能。 - **true** - **false**
    * crlName  吊销列表文件名称。 > 若用户不指定，系统将默认采用当前证书的父CA ID。
    * obsBucketName  OBS桶名称。
    * validDays  CRL更新周期，单位为\"天\"。当启用CRL发布功能，为必填项。
    * crlDisPoint  吊销列表分发地址，即对应的OBS桶中的CRL文件地址。 > 本参数由程序根据crl_name、obs_bucket_name以及OBS地址进行拼接而成。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enabled' => null,
        'crlName' => null,
        'obsBucketName' => null,
        'validDays' => 'int32',
        'crlDisPoint' => null
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
    * enabled  是否启用CRL发布功能。 - **true** - **false**
    * crlName  吊销列表文件名称。 > 若用户不指定，系统将默认采用当前证书的父CA ID。
    * obsBucketName  OBS桶名称。
    * validDays  CRL更新周期，单位为\"天\"。当启用CRL发布功能，为必填项。
    * crlDisPoint  吊销列表分发地址，即对应的OBS桶中的CRL文件地址。 > 本参数由程序根据crl_name、obs_bucket_name以及OBS地址进行拼接而成。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enabled' => 'enabled',
            'crlName' => 'crl_name',
            'obsBucketName' => 'obs_bucket_name',
            'validDays' => 'valid_days',
            'crlDisPoint' => 'crl_dis_point'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enabled  是否启用CRL发布功能。 - **true** - **false**
    * crlName  吊销列表文件名称。 > 若用户不指定，系统将默认采用当前证书的父CA ID。
    * obsBucketName  OBS桶名称。
    * validDays  CRL更新周期，单位为\"天\"。当启用CRL发布功能，为必填项。
    * crlDisPoint  吊销列表分发地址，即对应的OBS桶中的CRL文件地址。 > 本参数由程序根据crl_name、obs_bucket_name以及OBS地址进行拼接而成。
    *
    * @var string[]
    */
    protected static $setters = [
            'enabled' => 'setEnabled',
            'crlName' => 'setCrlName',
            'obsBucketName' => 'setObsBucketName',
            'validDays' => 'setValidDays',
            'crlDisPoint' => 'setCrlDisPoint'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enabled  是否启用CRL发布功能。 - **true** - **false**
    * crlName  吊销列表文件名称。 > 若用户不指定，系统将默认采用当前证书的父CA ID。
    * obsBucketName  OBS桶名称。
    * validDays  CRL更新周期，单位为\"天\"。当启用CRL发布功能，为必填项。
    * crlDisPoint  吊销列表分发地址，即对应的OBS桶中的CRL文件地址。 > 本参数由程序根据crl_name、obs_bucket_name以及OBS地址进行拼接而成。
    *
    * @var string[]
    */
    protected static $getters = [
            'enabled' => 'getEnabled',
            'crlName' => 'getCrlName',
            'obsBucketName' => 'getObsBucketName',
            'validDays' => 'getValidDays',
            'crlDisPoint' => 'getCrlDisPoint'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['crlName'] = isset($data['crlName']) ? $data['crlName'] : null;
        $this->container['obsBucketName'] = isset($data['obsBucketName']) ? $data['obsBucketName'] : null;
        $this->container['validDays'] = isset($data['validDays']) ? $data['validDays'] : null;
        $this->container['crlDisPoint'] = isset($data['crlDisPoint']) ? $data['crlDisPoint'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['crlName'] === null) {
            $invalidProperties[] = "'crlName' can't be null";
        }
        if ($this->container['obsBucketName'] === null) {
            $invalidProperties[] = "'obsBucketName' can't be null";
        }
        if ($this->container['validDays'] === null) {
            $invalidProperties[] = "'validDays' can't be null";
        }
            if (($this->container['validDays'] > 30)) {
                $invalidProperties[] = "invalid value for 'validDays', must be smaller than or equal to 30.";
            }
            if (($this->container['validDays'] < 7)) {
                $invalidProperties[] = "invalid value for 'validDays', must be bigger than or equal to 7.";
            }
        if ($this->container['crlDisPoint'] === null) {
            $invalidProperties[] = "'crlDisPoint' can't be null";
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
    * Gets enabled
    *  是否启用CRL发布功能。 - **true** - **false**
    *
    * @return bool
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool $enabled 是否启用CRL发布功能。 - **true** - **false**
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets crlName
    *  吊销列表文件名称。 > 若用户不指定，系统将默认采用当前证书的父CA ID。
    *
    * @return string
    */
    public function getCrlName()
    {
        return $this->container['crlName'];
    }

    /**
    * Sets crlName
    *
    * @param string $crlName 吊销列表文件名称。 > 若用户不指定，系统将默认采用当前证书的父CA ID。
    *
    * @return $this
    */
    public function setCrlName($crlName)
    {
        $this->container['crlName'] = $crlName;
        return $this;
    }

    /**
    * Gets obsBucketName
    *  OBS桶名称。
    *
    * @return string
    */
    public function getObsBucketName()
    {
        return $this->container['obsBucketName'];
    }

    /**
    * Sets obsBucketName
    *
    * @param string $obsBucketName OBS桶名称。
    *
    * @return $this
    */
    public function setObsBucketName($obsBucketName)
    {
        $this->container['obsBucketName'] = $obsBucketName;
        return $this;
    }

    /**
    * Gets validDays
    *  CRL更新周期，单位为\"天\"。当启用CRL发布功能，为必填项。
    *
    * @return int
    */
    public function getValidDays()
    {
        return $this->container['validDays'];
    }

    /**
    * Sets validDays
    *
    * @param int $validDays CRL更新周期，单位为\"天\"。当启用CRL发布功能，为必填项。
    *
    * @return $this
    */
    public function setValidDays($validDays)
    {
        $this->container['validDays'] = $validDays;
        return $this;
    }

    /**
    * Gets crlDisPoint
    *  吊销列表分发地址，即对应的OBS桶中的CRL文件地址。 > 本参数由程序根据crl_name、obs_bucket_name以及OBS地址进行拼接而成。
    *
    * @return string
    */
    public function getCrlDisPoint()
    {
        return $this->container['crlDisPoint'];
    }

    /**
    * Sets crlDisPoint
    *
    * @param string $crlDisPoint 吊销列表分发地址，即对应的OBS桶中的CRL文件地址。 > 本参数由程序根据crl_name、obs_bucket_name以及OBS地址进行拼接而成。
    *
    * @return $this
    */
    public function setCrlDisPoint($crlDisPoint)
    {
        $this->container['crlDisPoint'] = $crlDisPoint;
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

