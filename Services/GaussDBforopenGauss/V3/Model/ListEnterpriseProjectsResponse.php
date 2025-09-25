<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEnterpriseProjectsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEnterpriseProjectsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjects  **参数解释**: 企业项目列表。
    * totalCount  **参数解释**: 企业项目总数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjects' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\EnterpriseProjectInfoResult[]',
            'totalCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjects  **参数解释**: 企业项目列表。
    * totalCount  **参数解释**: 企业项目总数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjects' => null,
        'totalCount' => null
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
    * enterpriseProjects  **参数解释**: 企业项目列表。
    * totalCount  **参数解释**: 企业项目总数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjects' => 'enterprise_projects',
            'totalCount' => 'total_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjects  **参数解释**: 企业项目列表。
    * totalCount  **参数解释**: 企业项目总数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjects' => 'setEnterpriseProjects',
            'totalCount' => 'setTotalCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjects  **参数解释**: 企业项目列表。
    * totalCount  **参数解释**: 企业项目总数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjects' => 'getEnterpriseProjects',
            'totalCount' => 'getTotalCount'
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
        $this->container['enterpriseProjects'] = isset($data['enterpriseProjects']) ? $data['enterpriseProjects'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
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
    * Gets enterpriseProjects
    *  **参数解释**: 企业项目列表。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\EnterpriseProjectInfoResult[]|null
    */
    public function getEnterpriseProjects()
    {
        return $this->container['enterpriseProjects'];
    }

    /**
    * Sets enterpriseProjects
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\EnterpriseProjectInfoResult[]|null $enterpriseProjects **参数解释**: 企业项目列表。
    *
    * @return $this
    */
    public function setEnterpriseProjects($enterpriseProjects)
    {
        $this->container['enterpriseProjects'] = $enterpriseProjects;
        return $this;
    }

    /**
    * Gets totalCount
    *  **参数解释**: 企业项目总数。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount **参数解释**: 企业项目总数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
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

