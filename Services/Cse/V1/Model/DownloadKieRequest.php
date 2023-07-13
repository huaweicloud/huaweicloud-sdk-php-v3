<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DownloadKieRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DownloadKieRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xEnterpriseProjectId  如果不带则默认企业项目为\"default\"，ID为\"0\"
    * xEngineId  微服务引擎专享版ID。
    * label  按label过滤项导出，格式为：{标签key}:{标签value}
    * match  对label过滤项的匹配选项，如果值为exact：表示严格匹配，包括label个数和内容相等；不填表示包含匹配
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xEnterpriseProjectId' => 'string',
            'xEngineId' => 'string',
            'label' => 'string',
            'match' => 'string',
            'body' => '\HuaweiCloud\SDK\Cse\V1\Model\DownloadKieReqBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xEnterpriseProjectId  如果不带则默认企业项目为\"default\"，ID为\"0\"
    * xEngineId  微服务引擎专享版ID。
    * label  按label过滤项导出，格式为：{标签key}:{标签value}
    * match  对label过滤项的匹配选项，如果值为exact：表示严格匹配，包括label个数和内容相等；不填表示包含匹配
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xEnterpriseProjectId' => null,
        'xEngineId' => null,
        'label' => null,
        'match' => null,
        'body' => null
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
    * xEnterpriseProjectId  如果不带则默认企业项目为\"default\"，ID为\"0\"
    * xEngineId  微服务引擎专享版ID。
    * label  按label过滤项导出，格式为：{标签key}:{标签value}
    * match  对label过滤项的匹配选项，如果值为exact：表示严格匹配，包括label个数和内容相等；不填表示包含匹配
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xEnterpriseProjectId' => 'X-Enterprise-Project-ID',
            'xEngineId' => 'x-engine-id',
            'label' => 'label',
            'match' => 'match',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xEnterpriseProjectId  如果不带则默认企业项目为\"default\"，ID为\"0\"
    * xEngineId  微服务引擎专享版ID。
    * label  按label过滤项导出，格式为：{标签key}:{标签value}
    * match  对label过滤项的匹配选项，如果值为exact：表示严格匹配，包括label个数和内容相等；不填表示包含匹配
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'xEnterpriseProjectId' => 'setXEnterpriseProjectId',
            'xEngineId' => 'setXEngineId',
            'label' => 'setLabel',
            'match' => 'setMatch',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xEnterpriseProjectId  如果不带则默认企业项目为\"default\"，ID为\"0\"
    * xEngineId  微服务引擎专享版ID。
    * label  按label过滤项导出，格式为：{标签key}:{标签value}
    * match  对label过滤项的匹配选项，如果值为exact：表示严格匹配，包括label个数和内容相等；不填表示包含匹配
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'xEnterpriseProjectId' => 'getXEnterpriseProjectId',
            'xEngineId' => 'getXEngineId',
            'label' => 'getLabel',
            'match' => 'getMatch',
            'body' => 'getBody'
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
    const MATCH_EXACT = 'exact';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMatchAllowableValues()
    {
        return [
            self::MATCH_EXACT,
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
        $this->container['xEnterpriseProjectId'] = isset($data['xEnterpriseProjectId']) ? $data['xEnterpriseProjectId'] : '0';
        $this->container['xEngineId'] = isset($data['xEngineId']) ? $data['xEngineId'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['match'] = isset($data['match']) ? $data['match'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['xEngineId'] === null) {
            $invalidProperties[] = "'xEngineId' can't be null";
        }
            $allowedValues = $this->getMatchAllowableValues();
                if (!is_null($this->container['match']) && !in_array($this->container['match'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'match', must be one of '%s'",
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
    * Gets xEnterpriseProjectId
    *  如果不带则默认企业项目为\"default\"，ID为\"0\"
    *
    * @return string|null
    */
    public function getXEnterpriseProjectId()
    {
        return $this->container['xEnterpriseProjectId'];
    }

    /**
    * Sets xEnterpriseProjectId
    *
    * @param string|null $xEnterpriseProjectId 如果不带则默认企业项目为\"default\"，ID为\"0\"
    *
    * @return $this
    */
    public function setXEnterpriseProjectId($xEnterpriseProjectId)
    {
        $this->container['xEnterpriseProjectId'] = $xEnterpriseProjectId;
        return $this;
    }

    /**
    * Gets xEngineId
    *  微服务引擎专享版ID。
    *
    * @return string
    */
    public function getXEngineId()
    {
        return $this->container['xEngineId'];
    }

    /**
    * Sets xEngineId
    *
    * @param string $xEngineId 微服务引擎专享版ID。
    *
    * @return $this
    */
    public function setXEngineId($xEngineId)
    {
        $this->container['xEngineId'] = $xEngineId;
        return $this;
    }

    /**
    * Gets label
    *  按label过滤项导出，格式为：{标签key}:{标签value}
    *
    * @return string|null
    */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
    * Sets label
    *
    * @param string|null $label 按label过滤项导出，格式为：{标签key}:{标签value}
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
        return $this;
    }

    /**
    * Gets match
    *  对label过滤项的匹配选项，如果值为exact：表示严格匹配，包括label个数和内容相等；不填表示包含匹配
    *
    * @return string|null
    */
    public function getMatch()
    {
        return $this->container['match'];
    }

    /**
    * Sets match
    *
    * @param string|null $match 对label过滤项的匹配选项，如果值为exact：表示严格匹配，包括label个数和内容相等；不填表示包含匹配
    *
    * @return $this
    */
    public function setMatch($match)
    {
        $this->container['match'] = $match;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Cse\V1\Model\DownloadKieReqBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Cse\V1\Model\DownloadKieReqBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

