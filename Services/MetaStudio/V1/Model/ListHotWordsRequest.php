<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListHotWordsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListHotWordsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息。
    * xAppUserId  第三方用户ID。不允许输入中文。
    * offset  偏移量，表示从此偏移量开始查询。
    * limit  每页显示的条目数量。
    * robotId  应用ID。
    * region  sis服务所在区域
    * language  智能交互语言  * zh_CN:简体中文  * en_US:英语
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authorization' => 'string',
            'xSdkDate' => 'string',
            'xProjectId' => 'string',
            'xAppUserId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'robotId' => 'string',
            'region' => 'int',
            'language' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息。
    * xAppUserId  第三方用户ID。不允许输入中文。
    * offset  偏移量，表示从此偏移量开始查询。
    * limit  每页显示的条目数量。
    * robotId  应用ID。
    * region  sis服务所在区域
    * language  智能交互语言  * zh_CN:简体中文  * en_US:英语
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authorization' => null,
        'xSdkDate' => null,
        'xProjectId' => null,
        'xAppUserId' => null,
        'offset' => 'uint32',
        'limit' => 'uint32',
        'robotId' => null,
        'region' => null,
        'language' => null
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
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息。
    * xAppUserId  第三方用户ID。不允许输入中文。
    * offset  偏移量，表示从此偏移量开始查询。
    * limit  每页显示的条目数量。
    * robotId  应用ID。
    * region  sis服务所在区域
    * language  智能交互语言  * zh_CN:简体中文  * en_US:英语
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authorization' => 'Authorization',
            'xSdkDate' => 'X-Sdk-Date',
            'xProjectId' => 'X-Project-Id',
            'xAppUserId' => 'X-App-UserId',
            'offset' => 'offset',
            'limit' => 'limit',
            'robotId' => 'robot_id',
            'region' => 'region',
            'language' => 'language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息。
    * xAppUserId  第三方用户ID。不允许输入中文。
    * offset  偏移量，表示从此偏移量开始查询。
    * limit  每页显示的条目数量。
    * robotId  应用ID。
    * region  sis服务所在区域
    * language  智能交互语言  * zh_CN:简体中文  * en_US:英语
    *
    * @var string[]
    */
    protected static $setters = [
            'authorization' => 'setAuthorization',
            'xSdkDate' => 'setXSdkDate',
            'xProjectId' => 'setXProjectId',
            'xAppUserId' => 'setXAppUserId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'robotId' => 'setRobotId',
            'region' => 'setRegion',
            'language' => 'setLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息。
    * xAppUserId  第三方用户ID。不允许输入中文。
    * offset  偏移量，表示从此偏移量开始查询。
    * limit  每页显示的条目数量。
    * robotId  应用ID。
    * region  sis服务所在区域
    * language  智能交互语言  * zh_CN:简体中文  * en_US:英语
    *
    * @var string[]
    */
    protected static $getters = [
            'authorization' => 'getAuthorization',
            'xSdkDate' => 'getXSdkDate',
            'xProjectId' => 'getXProjectId',
            'xAppUserId' => 'getXAppUserId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'robotId' => 'getRobotId',
            'region' => 'getRegion',
            'language' => 'getLanguage'
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
    const LANGUAGE_ZH_CN = 'zh_CN';
    const LANGUAGE_EN_US = 'en_US';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLanguageAllowableValues()
    {
        return [
            self::LANGUAGE_ZH_CN,
            self::LANGUAGE_EN_US,
        ];
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
        $this->container['authorization'] = isset($data['authorization']) ? $data['authorization'] : null;
        $this->container['xSdkDate'] = isset($data['xSdkDate']) ? $data['xSdkDate'] : null;
        $this->container['xProjectId'] = isset($data['xProjectId']) ? $data['xProjectId'] : null;
        $this->container['xAppUserId'] = isset($data['xAppUserId']) ? $data['xAppUserId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['robotId'] = isset($data['robotId']) ? $data['robotId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['authorization']) && (mb_strlen($this->container['authorization']) > 256)) {
                $invalidProperties[] = "invalid value for 'authorization', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['authorization']) && (mb_strlen($this->container['authorization']) < 1)) {
                $invalidProperties[] = "invalid value for 'authorization', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['xSdkDate']) && (mb_strlen($this->container['xSdkDate']) > 256)) {
                $invalidProperties[] = "invalid value for 'xSdkDate', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['xSdkDate']) && (mb_strlen($this->container['xSdkDate']) < 1)) {
                $invalidProperties[] = "invalid value for 'xSdkDate', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['xProjectId']) && (mb_strlen($this->container['xProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'xProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['xProjectId']) && (mb_strlen($this->container['xProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'xProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['xAppUserId']) && (mb_strlen($this->container['xAppUserId']) > 256)) {
                $invalidProperties[] = "invalid value for 'xAppUserId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['xAppUserId']) && (mb_strlen($this->container['xAppUserId']) < 1)) {
                $invalidProperties[] = "invalid value for 'xAppUserId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
        if ($this->container['robotId'] === null) {
            $invalidProperties[] = "'robotId' can't be null";
        }
            if ((mb_strlen($this->container['robotId']) > 64)) {
                $invalidProperties[] = "invalid value for 'robotId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['robotId']) < 1)) {
                $invalidProperties[] = "invalid value for 'robotId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['region']) && ($this->container['region'] > 32)) {
                $invalidProperties[] = "invalid value for 'region', must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['region']) && ($this->container['region'] < 0)) {
                $invalidProperties[] = "invalid value for 'region', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getLanguageAllowableValues();
                if (!is_null($this->container['language']) && !in_array($this->container['language'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'language', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets authorization
    *  使用AK/SK方式认证时必选，携带的鉴权信息。
    *
    * @return string|null
    */
    public function getAuthorization()
    {
        return $this->container['authorization'];
    }

    /**
    * Sets authorization
    *
    * @param string|null $authorization 使用AK/SK方式认证时必选，携带的鉴权信息。
    *
    * @return $this
    */
    public function setAuthorization($authorization)
    {
        $this->container['authorization'] = $authorization;
        return $this;
    }

    /**
    * Gets xSdkDate
    *  使用AK/SK方式认证时必选，请求的发生时间。
    *
    * @return string|null
    */
    public function getXSdkDate()
    {
        return $this->container['xSdkDate'];
    }

    /**
    * Sets xSdkDate
    *
    * @param string|null $xSdkDate 使用AK/SK方式认证时必选，请求的发生时间。
    *
    * @return $this
    */
    public function setXSdkDate($xSdkDate)
    {
        $this->container['xSdkDate'] = $xSdkDate;
        return $this;
    }

    /**
    * Gets xProjectId
    *  使用AK/SK方式认证时必选，携带项目ID信息。
    *
    * @return string|null
    */
    public function getXProjectId()
    {
        return $this->container['xProjectId'];
    }

    /**
    * Sets xProjectId
    *
    * @param string|null $xProjectId 使用AK/SK方式认证时必选，携带项目ID信息。
    *
    * @return $this
    */
    public function setXProjectId($xProjectId)
    {
        $this->container['xProjectId'] = $xProjectId;
        return $this;
    }

    /**
    * Gets xAppUserId
    *  第三方用户ID。不允许输入中文。
    *
    * @return string|null
    */
    public function getXAppUserId()
    {
        return $this->container['xAppUserId'];
    }

    /**
    * Sets xAppUserId
    *
    * @param string|null $xAppUserId 第三方用户ID。不允许输入中文。
    *
    * @return $this
    */
    public function setXAppUserId($xAppUserId)
    {
        $this->container['xAppUserId'] = $xAppUserId;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，表示从此偏移量开始查询。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量，表示从此偏移量开始查询。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示的条目数量。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页显示的条目数量。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets robotId
    *  应用ID。
    *
    * @return string
    */
    public function getRobotId()
    {
        return $this->container['robotId'];
    }

    /**
    * Sets robotId
    *
    * @param string $robotId 应用ID。
    *
    * @return $this
    */
    public function setRobotId($robotId)
    {
        $this->container['robotId'] = $robotId;
        return $this;
    }

    /**
    * Gets region
    *  sis服务所在区域
    *
    * @return int|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param int|null $region sis服务所在区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets language
    *  智能交互语言  * zh_CN:简体中文  * en_US:英语
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language 智能交互语言  * zh_CN:简体中文  * en_US:英语
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
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

