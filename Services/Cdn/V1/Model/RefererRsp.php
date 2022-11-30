<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RefererRsp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RefererRsp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * refererType  Referer类型。取值：0代表不设置Referer过滤；1代表黑名单；2代表白名单。默认取值为0。
    * refererList  请输入域名或IP地址，以“;”进行分割，域名、IP地址可以混合输入，支持泛域名添加。输入的域名、IP地址总数不超过100个。当设置防盗链时，此项必填。
    * includeEmpty  是否包含空Referer。如果是黑名单并开启该选项，则表示无referer不允许访问。如果是白名单并开启该选项，则表示无referer允许访问。默认不包含。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'refererType' => 'int',
            'refererList' => 'string',
            'includeEmpty' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * refererType  Referer类型。取值：0代表不设置Referer过滤；1代表黑名单；2代表白名单。默认取值为0。
    * refererList  请输入域名或IP地址，以“;”进行分割，域名、IP地址可以混合输入，支持泛域名添加。输入的域名、IP地址总数不超过100个。当设置防盗链时，此项必填。
    * includeEmpty  是否包含空Referer。如果是黑名单并开启该选项，则表示无referer不允许访问。如果是白名单并开启该选项，则表示无referer允许访问。默认不包含。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'refererType' => 'int32',
        'refererList' => null,
        'includeEmpty' => null
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
    * refererType  Referer类型。取值：0代表不设置Referer过滤；1代表黑名单；2代表白名单。默认取值为0。
    * refererList  请输入域名或IP地址，以“;”进行分割，域名、IP地址可以混合输入，支持泛域名添加。输入的域名、IP地址总数不超过100个。当设置防盗链时，此项必填。
    * includeEmpty  是否包含空Referer。如果是黑名单并开启该选项，则表示无referer不允许访问。如果是白名单并开启该选项，则表示无referer允许访问。默认不包含。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'refererType' => 'referer_type',
            'refererList' => 'referer_list',
            'includeEmpty' => 'include_empty'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * refererType  Referer类型。取值：0代表不设置Referer过滤；1代表黑名单；2代表白名单。默认取值为0。
    * refererList  请输入域名或IP地址，以“;”进行分割，域名、IP地址可以混合输入，支持泛域名添加。输入的域名、IP地址总数不超过100个。当设置防盗链时，此项必填。
    * includeEmpty  是否包含空Referer。如果是黑名单并开启该选项，则表示无referer不允许访问。如果是白名单并开启该选项，则表示无referer允许访问。默认不包含。
    *
    * @var string[]
    */
    protected static $setters = [
            'refererType' => 'setRefererType',
            'refererList' => 'setRefererList',
            'includeEmpty' => 'setIncludeEmpty'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * refererType  Referer类型。取值：0代表不设置Referer过滤；1代表黑名单；2代表白名单。默认取值为0。
    * refererList  请输入域名或IP地址，以“;”进行分割，域名、IP地址可以混合输入，支持泛域名添加。输入的域名、IP地址总数不超过100个。当设置防盗链时，此项必填。
    * includeEmpty  是否包含空Referer。如果是黑名单并开启该选项，则表示无referer不允许访问。如果是白名单并开启该选项，则表示无referer允许访问。默认不包含。
    *
    * @var string[]
    */
    protected static $getters = [
            'refererType' => 'getRefererType',
            'refererList' => 'getRefererList',
            'includeEmpty' => 'getIncludeEmpty'
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
        $this->container['refererType'] = isset($data['refererType']) ? $data['refererType'] : null;
        $this->container['refererList'] = isset($data['refererList']) ? $data['refererList'] : null;
        $this->container['includeEmpty'] = isset($data['includeEmpty']) ? $data['includeEmpty'] : null;
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
    * Gets refererType
    *  Referer类型。取值：0代表不设置Referer过滤；1代表黑名单；2代表白名单。默认取值为0。
    *
    * @return int|null
    */
    public function getRefererType()
    {
        return $this->container['refererType'];
    }

    /**
    * Sets refererType
    *
    * @param int|null $refererType Referer类型。取值：0代表不设置Referer过滤；1代表黑名单；2代表白名单。默认取值为0。
    *
    * @return $this
    */
    public function setRefererType($refererType)
    {
        $this->container['refererType'] = $refererType;
        return $this;
    }

    /**
    * Gets refererList
    *  请输入域名或IP地址，以“;”进行分割，域名、IP地址可以混合输入，支持泛域名添加。输入的域名、IP地址总数不超过100个。当设置防盗链时，此项必填。
    *
    * @return string|null
    */
    public function getRefererList()
    {
        return $this->container['refererList'];
    }

    /**
    * Sets refererList
    *
    * @param string|null $refererList 请输入域名或IP地址，以“;”进行分割，域名、IP地址可以混合输入，支持泛域名添加。输入的域名、IP地址总数不超过100个。当设置防盗链时，此项必填。
    *
    * @return $this
    */
    public function setRefererList($refererList)
    {
        $this->container['refererList'] = $refererList;
        return $this;
    }

    /**
    * Gets includeEmpty
    *  是否包含空Referer。如果是黑名单并开启该选项，则表示无referer不允许访问。如果是白名单并开启该选项，则表示无referer允许访问。默认不包含。
    *
    * @return bool|null
    */
    public function getIncludeEmpty()
    {
        return $this->container['includeEmpty'];
    }

    /**
    * Sets includeEmpty
    *
    * @param bool|null $includeEmpty 是否包含空Referer。如果是黑名单并开启该选项，则表示无referer不允许访问。如果是白名单并开启该选项，则表示无referer允许访问。默认不包含。
    *
    * @return $this
    */
    public function setIncludeEmpty($includeEmpty)
    {
        $this->container['includeEmpty'] = $includeEmpty;
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

