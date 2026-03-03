<?php

namespace HuaweiCloud\SDK\Ccm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EnableCertificateAuthorityCrlRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EnableCertificateAuthorityCrlRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * crlName  吊销列表文件名称。 > 若用户不指定，系统将默认采用当前证书的父CA ID。
    * obsBucketName  OBS桶名称。 > - 用户必须已创建委托授权，授予PCA服务对OBS的相关权限，具体参见本文档：**证书吊销处理>查看是否具有委托权限**、**证书吊销处理>创建委托**； > - 指定的OBS桶必须存在，否则将报错。
    * validDays  CRL更新周期，单位为\"天\"。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'crlName' => 'string',
            'obsBucketName' => 'string',
            'validDays' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * crlName  吊销列表文件名称。 > 若用户不指定，系统将默认采用当前证书的父CA ID。
    * obsBucketName  OBS桶名称。 > - 用户必须已创建委托授权，授予PCA服务对OBS的相关权限，具体参见本文档：**证书吊销处理>查看是否具有委托权限**、**证书吊销处理>创建委托**； > - 指定的OBS桶必须存在，否则将报错。
    * validDays  CRL更新周期，单位为\"天\"。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'crlName' => null,
        'obsBucketName' => null,
        'validDays' => 'int32'
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
    * crlName  吊销列表文件名称。 > 若用户不指定，系统将默认采用当前证书的父CA ID。
    * obsBucketName  OBS桶名称。 > - 用户必须已创建委托授权，授予PCA服务对OBS的相关权限，具体参见本文档：**证书吊销处理>查看是否具有委托权限**、**证书吊销处理>创建委托**； > - 指定的OBS桶必须存在，否则将报错。
    * validDays  CRL更新周期，单位为\"天\"。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'crlName' => 'crl_name',
            'obsBucketName' => 'obs_bucket_name',
            'validDays' => 'valid_days'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * crlName  吊销列表文件名称。 > 若用户不指定，系统将默认采用当前证书的父CA ID。
    * obsBucketName  OBS桶名称。 > - 用户必须已创建委托授权，授予PCA服务对OBS的相关权限，具体参见本文档：**证书吊销处理>查看是否具有委托权限**、**证书吊销处理>创建委托**； > - 指定的OBS桶必须存在，否则将报错。
    * validDays  CRL更新周期，单位为\"天\"。
    *
    * @var string[]
    */
    protected static $setters = [
            'crlName' => 'setCrlName',
            'obsBucketName' => 'setObsBucketName',
            'validDays' => 'setValidDays'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * crlName  吊销列表文件名称。 > 若用户不指定，系统将默认采用当前证书的父CA ID。
    * obsBucketName  OBS桶名称。 > - 用户必须已创建委托授权，授予PCA服务对OBS的相关权限，具体参见本文档：**证书吊销处理>查看是否具有委托权限**、**证书吊销处理>创建委托**； > - 指定的OBS桶必须存在，否则将报错。
    * validDays  CRL更新周期，单位为\"天\"。
    *
    * @var string[]
    */
    protected static $getters = [
            'crlName' => 'getCrlName',
            'obsBucketName' => 'getObsBucketName',
            'validDays' => 'getValidDays'
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
        $this->container['crlName'] = isset($data['crlName']) ? $data['crlName'] : null;
        $this->container['obsBucketName'] = isset($data['obsBucketName']) ? $data['obsBucketName'] : null;
        $this->container['validDays'] = isset($data['validDays']) ? $data['validDays'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets crlName
    *  吊销列表文件名称。 > 若用户不指定，系统将默认采用当前证书的父CA ID。
    *
    * @return string|null
    */
    public function getCrlName()
    {
        return $this->container['crlName'];
    }

    /**
    * Sets crlName
    *
    * @param string|null $crlName 吊销列表文件名称。 > 若用户不指定，系统将默认采用当前证书的父CA ID。
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
    *  OBS桶名称。 > - 用户必须已创建委托授权，授予PCA服务对OBS的相关权限，具体参见本文档：**证书吊销处理>查看是否具有委托权限**、**证书吊销处理>创建委托**； > - 指定的OBS桶必须存在，否则将报错。
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
    * @param string $obsBucketName OBS桶名称。 > - 用户必须已创建委托授权，授予PCA服务对OBS的相关权限，具体参见本文档：**证书吊销处理>查看是否具有委托权限**、**证书吊销处理>创建委托**； > - 指定的OBS桶必须存在，否则将报错。
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
    *  CRL更新周期，单位为\"天\"。
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
    * @param int $validDays CRL更新周期，单位为\"天\"。
    *
    * @return $this
    */
    public function setValidDays($validDays)
    {
        $this->container['validDays'] = $validDays;
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

