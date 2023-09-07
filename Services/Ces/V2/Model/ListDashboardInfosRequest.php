<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDashboardInfosRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDashboardInfosRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseId  企业项目Id
    * isFavorite  指定企业项目下监控看板是否收藏，true:收藏，false:未收藏，填此参数时，enterprise_id必填
    * dashboardName  监控看板名称
    * dashboardId  监控看板id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseId' => 'string',
            'isFavorite' => 'bool',
            'dashboardName' => 'string',
            'dashboardId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseId  企业项目Id
    * isFavorite  指定企业项目下监控看板是否收藏，true:收藏，false:未收藏，填此参数时，enterprise_id必填
    * dashboardName  监控看板名称
    * dashboardId  监控看板id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseId' => null,
        'isFavorite' => null,
        'dashboardName' => null,
        'dashboardId' => null
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
    * enterpriseId  企业项目Id
    * isFavorite  指定企业项目下监控看板是否收藏，true:收藏，false:未收藏，填此参数时，enterprise_id必填
    * dashboardName  监控看板名称
    * dashboardId  监控看板id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseId' => 'enterprise_id',
            'isFavorite' => 'is_favorite',
            'dashboardName' => 'dashboard_name',
            'dashboardId' => 'dashboard_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseId  企业项目Id
    * isFavorite  指定企业项目下监控看板是否收藏，true:收藏，false:未收藏，填此参数时，enterprise_id必填
    * dashboardName  监控看板名称
    * dashboardId  监控看板id
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseId' => 'setEnterpriseId',
            'isFavorite' => 'setIsFavorite',
            'dashboardName' => 'setDashboardName',
            'dashboardId' => 'setDashboardId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseId  企业项目Id
    * isFavorite  指定企业项目下监控看板是否收藏，true:收藏，false:未收藏，填此参数时，enterprise_id必填
    * dashboardName  监控看板名称
    * dashboardId  监控看板id
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseId' => 'getEnterpriseId',
            'isFavorite' => 'getIsFavorite',
            'dashboardName' => 'getDashboardName',
            'dashboardId' => 'getDashboardId'
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
        $this->container['enterpriseId'] = isset($data['enterpriseId']) ? $data['enterpriseId'] : null;
        $this->container['isFavorite'] = isset($data['isFavorite']) ? $data['isFavorite'] : null;
        $this->container['dashboardName'] = isset($data['dashboardName']) ? $data['dashboardName'] : null;
        $this->container['dashboardId'] = isset($data['dashboardId']) ? $data['dashboardId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseId']) && !preg_match("/^((([a-z]|[0-9]){8}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){12})|0|all_granted_eps)$/", $this->container['enterpriseId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseId', must be conform to the pattern /^((([a-z]|[0-9]){8}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){12})|0|all_granted_eps)$/.";
            }
            if (!is_null($this->container['dashboardName']) && (mb_strlen($this->container['dashboardName']) > 128)) {
                $invalidProperties[] = "invalid value for 'dashboardName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['dashboardName']) && (mb_strlen($this->container['dashboardName']) < 1)) {
                $invalidProperties[] = "invalid value for 'dashboardName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dashboardName']) && !preg_match("/^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/", $this->container['dashboardName'])) {
                $invalidProperties[] = "invalid value for 'dashboardName', must be conform to the pattern /^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/.";
            }
            if (!is_null($this->container['dashboardId']) && !preg_match("/^db([a-z]|[A-Z]|[0-9]){22}/", $this->container['dashboardId'])) {
                $invalidProperties[] = "invalid value for 'dashboardId', must be conform to the pattern /^db([a-z]|[A-Z]|[0-9]){22}/.";
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
    * Gets enterpriseId
    *  企业项目Id
    *
    * @return string|null
    */
    public function getEnterpriseId()
    {
        return $this->container['enterpriseId'];
    }

    /**
    * Sets enterpriseId
    *
    * @param string|null $enterpriseId 企业项目Id
    *
    * @return $this
    */
    public function setEnterpriseId($enterpriseId)
    {
        $this->container['enterpriseId'] = $enterpriseId;
        return $this;
    }

    /**
    * Gets isFavorite
    *  指定企业项目下监控看板是否收藏，true:收藏，false:未收藏，填此参数时，enterprise_id必填
    *
    * @return bool|null
    */
    public function getIsFavorite()
    {
        return $this->container['isFavorite'];
    }

    /**
    * Sets isFavorite
    *
    * @param bool|null $isFavorite 指定企业项目下监控看板是否收藏，true:收藏，false:未收藏，填此参数时，enterprise_id必填
    *
    * @return $this
    */
    public function setIsFavorite($isFavorite)
    {
        $this->container['isFavorite'] = $isFavorite;
        return $this;
    }

    /**
    * Gets dashboardName
    *  监控看板名称
    *
    * @return string|null
    */
    public function getDashboardName()
    {
        return $this->container['dashboardName'];
    }

    /**
    * Sets dashboardName
    *
    * @param string|null $dashboardName 监控看板名称
    *
    * @return $this
    */
    public function setDashboardName($dashboardName)
    {
        $this->container['dashboardName'] = $dashboardName;
        return $this;
    }

    /**
    * Gets dashboardId
    *  监控看板id
    *
    * @return string|null
    */
    public function getDashboardId()
    {
        return $this->container['dashboardId'];
    }

    /**
    * Sets dashboardId
    *
    * @param string|null $dashboardId 监控看板id
    *
    * @return $this
    */
    public function setDashboardId($dashboardId)
    {
        $this->container['dashboardId'] = $dashboardId;
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

