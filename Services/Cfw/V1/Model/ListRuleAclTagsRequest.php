<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRuleAclTagsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRuleAclTagsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID, 可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml)
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * fwInstanceId  防火墙id，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * limit  每页显示个数，范围为1-1024
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'enterpriseProjectId' => 'string',
            'fwInstanceId' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID, 可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml)
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * fwInstanceId  防火墙id，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * limit  每页显示个数，范围为1-1024
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'enterpriseProjectId' => null,
        'fwInstanceId' => null,
        'offset' => 'int32',
        'limit' => 'int32'
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
    * projectId  项目ID, 可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml)
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * fwInstanceId  防火墙id，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * limit  每页显示个数，范围为1-1024
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'fwInstanceId' => 'fw_instance_id',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID, 可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml)
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * fwInstanceId  防火墙id，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * limit  每页显示个数，范围为1-1024
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'fwInstanceId' => 'setFwInstanceId',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID, 可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml)
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * fwInstanceId  防火墙id，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * limit  每页显示个数，范围为1-1024
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'fwInstanceId' => 'getFwInstanceId',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['fwInstanceId'] = isset($data['fwInstanceId']) ? $data['fwInstanceId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['fwInstanceId'] === null) {
            $invalidProperties[] = "'fwInstanceId' can't be null";
        }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
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
    * Gets projectId
    *  项目ID, 可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml)
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID, 可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml)
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets fwInstanceId
    *  防火墙id，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    *
    * @return string
    */
    public function getFwInstanceId()
    {
        return $this->container['fwInstanceId'];
    }

    /**
    * Sets fwInstanceId
    *
    * @param string $fwInstanceId 防火墙id，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    *
    * @return $this
    */
    public function setFwInstanceId($fwInstanceId)
    {
        $this->container['fwInstanceId'] = $fwInstanceId;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset 偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
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
    *  每页显示个数，范围为1-1024
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 每页显示个数，范围为1-1024
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

