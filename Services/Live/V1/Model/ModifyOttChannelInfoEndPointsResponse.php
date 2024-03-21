<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyOttChannelInfoEndPointsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyOttChannelInfoEndPointsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resultCode  错误码
    * resultMsg  错误描述
    * domain  推流域名
    * appName  组名或应用名，为必填项
    * id  频道ID。频道唯一标识，为必填项
    * sources  推流URL列表。创建频道时，只有入流协议为RTMP_PUSH时，会返回推流URL列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resultCode' => 'string',
            'resultMsg' => 'string',
            'domain' => 'string',
            'appName' => 'string',
            'id' => 'string',
            'sources' => '\HuaweiCloud\SDK\Live\V1\Model\SourceRsp[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resultCode  错误码
    * resultMsg  错误描述
    * domain  推流域名
    * appName  组名或应用名，为必填项
    * id  频道ID。频道唯一标识，为必填项
    * sources  推流URL列表。创建频道时，只有入流协议为RTMP_PUSH时，会返回推流URL列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resultCode' => null,
        'resultMsg' => null,
        'domain' => null,
        'appName' => null,
        'id' => null,
        'sources' => null
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
    * resultCode  错误码
    * resultMsg  错误描述
    * domain  推流域名
    * appName  组名或应用名，为必填项
    * id  频道ID。频道唯一标识，为必填项
    * sources  推流URL列表。创建频道时，只有入流协议为RTMP_PUSH时，会返回推流URL列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resultCode' => 'result_code',
            'resultMsg' => 'result_msg',
            'domain' => 'domain',
            'appName' => 'app_name',
            'id' => 'id',
            'sources' => 'sources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resultCode  错误码
    * resultMsg  错误描述
    * domain  推流域名
    * appName  组名或应用名，为必填项
    * id  频道ID。频道唯一标识，为必填项
    * sources  推流URL列表。创建频道时，只有入流协议为RTMP_PUSH时，会返回推流URL列表
    *
    * @var string[]
    */
    protected static $setters = [
            'resultCode' => 'setResultCode',
            'resultMsg' => 'setResultMsg',
            'domain' => 'setDomain',
            'appName' => 'setAppName',
            'id' => 'setId',
            'sources' => 'setSources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resultCode  错误码
    * resultMsg  错误描述
    * domain  推流域名
    * appName  组名或应用名，为必填项
    * id  频道ID。频道唯一标识，为必填项
    * sources  推流URL列表。创建频道时，只有入流协议为RTMP_PUSH时，会返回推流URL列表
    *
    * @var string[]
    */
    protected static $getters = [
            'resultCode' => 'getResultCode',
            'resultMsg' => 'getResultMsg',
            'domain' => 'getDomain',
            'appName' => 'getAppName',
            'id' => 'getId',
            'sources' => 'getSources'
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
        $this->container['resultCode'] = isset($data['resultCode']) ? $data['resultCode'] : null;
        $this->container['resultMsg'] = isset($data['resultMsg']) ? $data['resultMsg'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resultCode']) && (mb_strlen($this->container['resultCode']) > 3)) {
                $invalidProperties[] = "invalid value for 'resultCode', the character length must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['resultCode']) && (mb_strlen($this->container['resultCode']) < 3)) {
                $invalidProperties[] = "invalid value for 'resultCode', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['resultMsg']) && (mb_strlen($this->container['resultMsg']) > 255)) {
                $invalidProperties[] = "invalid value for 'resultMsg', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['resultMsg']) && (mb_strlen($this->container['resultMsg']) < 1)) {
                $invalidProperties[] = "invalid value for 'resultMsg', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) > 255)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) < 1)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) > 255)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) < 1)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 255)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
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
    * Gets resultCode
    *  错误码
    *
    * @return string|null
    */
    public function getResultCode()
    {
        return $this->container['resultCode'];
    }

    /**
    * Sets resultCode
    *
    * @param string|null $resultCode 错误码
    *
    * @return $this
    */
    public function setResultCode($resultCode)
    {
        $this->container['resultCode'] = $resultCode;
        return $this;
    }

    /**
    * Gets resultMsg
    *  错误描述
    *
    * @return string|null
    */
    public function getResultMsg()
    {
        return $this->container['resultMsg'];
    }

    /**
    * Sets resultMsg
    *
    * @param string|null $resultMsg 错误描述
    *
    * @return $this
    */
    public function setResultMsg($resultMsg)
    {
        $this->container['resultMsg'] = $resultMsg;
        return $this;
    }

    /**
    * Gets domain
    *  推流域名
    *
    * @return string|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string|null $domain 推流域名
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets appName
    *  组名或应用名，为必填项
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName 组名或应用名，为必填项
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets id
    *  频道ID。频道唯一标识，为必填项
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 频道ID。频道唯一标识，为必填项
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets sources
    *  推流URL列表。创建频道时，只有入流协议为RTMP_PUSH时，会返回推流URL列表
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\SourceRsp[]|null
    */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
    * Sets sources
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\SourceRsp[]|null $sources 推流URL列表。创建频道时，只有入流协议为RTMP_PUSH时，会返回推流URL列表
    *
    * @return $this
    */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;
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

