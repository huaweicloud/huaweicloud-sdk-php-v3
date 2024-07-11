<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListHostGroupBaseInfosRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListHostGroupBaseInfosRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * applicationId  应用id
    * projectUuid  项目id
    * os  操作系统：windows|linux
    * pageIndex  分页页码
    * pageSize  分页查询每页条数
    * name  按主机集群名称搜索关键字
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'applicationId' => 'string',
            'projectUuid' => 'string',
            'os' => 'string',
            'pageIndex' => 'int',
            'pageSize' => 'int',
            'name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * applicationId  应用id
    * projectUuid  项目id
    * os  操作系统：windows|linux
    * pageIndex  分页页码
    * pageSize  分页查询每页条数
    * name  按主机集群名称搜索关键字
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'applicationId' => null,
        'projectUuid' => null,
        'os' => null,
        'pageIndex' => 'int32',
        'pageSize' => 'int32',
        'name' => null
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
    * applicationId  应用id
    * projectUuid  项目id
    * os  操作系统：windows|linux
    * pageIndex  分页页码
    * pageSize  分页查询每页条数
    * name  按主机集群名称搜索关键字
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'applicationId' => 'application_id',
            'projectUuid' => 'project_uuid',
            'os' => 'os',
            'pageIndex' => 'page_index',
            'pageSize' => 'page_size',
            'name' => 'name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * applicationId  应用id
    * projectUuid  项目id
    * os  操作系统：windows|linux
    * pageIndex  分页页码
    * pageSize  分页查询每页条数
    * name  按主机集群名称搜索关键字
    *
    * @var string[]
    */
    protected static $setters = [
            'applicationId' => 'setApplicationId',
            'projectUuid' => 'setProjectUuid',
            'os' => 'setOs',
            'pageIndex' => 'setPageIndex',
            'pageSize' => 'setPageSize',
            'name' => 'setName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * applicationId  应用id
    * projectUuid  项目id
    * os  操作系统：windows|linux
    * pageIndex  分页页码
    * pageSize  分页查询每页条数
    * name  按主机集群名称搜索关键字
    *
    * @var string[]
    */
    protected static $getters = [
            'applicationId' => 'getApplicationId',
            'projectUuid' => 'getProjectUuid',
            'os' => 'getOs',
            'pageIndex' => 'getPageIndex',
            'pageSize' => 'getPageSize',
            'name' => 'getName'
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
    const OS_LINUX = 'linux';
    const OS_WINDOWS = 'windows';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOsAllowableValues()
    {
        return [
            self::OS_LINUX,
            self::OS_WINDOWS,
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
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['pageIndex'] = isset($data['pageIndex']) ? $data['pageIndex'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['applicationId'] === null) {
            $invalidProperties[] = "'applicationId' can't be null";
        }
            if ((mb_strlen($this->container['applicationId']) > 32)) {
                $invalidProperties[] = "invalid value for 'applicationId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['applicationId']) < 32)) {
                $invalidProperties[] = "invalid value for 'applicationId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/^[0-9a-z]{32}$/", $this->container['applicationId'])) {
                $invalidProperties[] = "invalid value for 'applicationId', must be conform to the pattern /^[0-9a-z]{32}$/.";
            }
        if ($this->container['projectUuid'] === null) {
            $invalidProperties[] = "'projectUuid' can't be null";
        }
            if ((mb_strlen($this->container['projectUuid']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectUuid', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectUuid']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectUuid', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/^[0-9a-z]{32}$/", $this->container['projectUuid'])) {
                $invalidProperties[] = "invalid value for 'projectUuid', must be conform to the pattern /^[0-9a-z]{32}$/.";
            }
            $allowedValues = $this->getOsAllowableValues();
                if (!is_null($this->container['os']) && !in_array($this->container['os'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'os', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['os']) && (mb_strlen($this->container['os']) > 128)) {
                $invalidProperties[] = "invalid value for 'os', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['os']) && (mb_strlen($this->container['os']) < 0)) {
                $invalidProperties[] = "invalid value for 'os', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['pageIndex']) && ($this->container['pageIndex'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'pageIndex', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['pageIndex']) && ($this->container['pageIndex'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageIndex', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] > 1000)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[a-zA-Z0-9\\u4E00-\\u9FA5\\-_.]+(\\s+[a-zA-Z0-9\\u4E00-\\u9FA5\\-_.]+)*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9\\u4E00-\\u9FA5\\-_.]+(\\s+[a-zA-Z0-9\\u4E00-\\u9FA5\\-_.]+)*$/.";
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
    * Gets applicationId
    *  应用id
    *
    * @return string
    */
    public function getApplicationId()
    {
        return $this->container['applicationId'];
    }

    /**
    * Sets applicationId
    *
    * @param string $applicationId 应用id
    *
    * @return $this
    */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;
        return $this;
    }

    /**
    * Gets projectUuid
    *  项目id
    *
    * @return string
    */
    public function getProjectUuid()
    {
        return $this->container['projectUuid'];
    }

    /**
    * Sets projectUuid
    *
    * @param string $projectUuid 项目id
    *
    * @return $this
    */
    public function setProjectUuid($projectUuid)
    {
        $this->container['projectUuid'] = $projectUuid;
        return $this;
    }

    /**
    * Gets os
    *  操作系统：windows|linux
    *
    * @return string|null
    */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
    * Sets os
    *
    * @param string|null $os 操作系统：windows|linux
    *
    * @return $this
    */
    public function setOs($os)
    {
        $this->container['os'] = $os;
        return $this;
    }

    /**
    * Gets pageIndex
    *  分页页码
    *
    * @return int|null
    */
    public function getPageIndex()
    {
        return $this->container['pageIndex'];
    }

    /**
    * Sets pageIndex
    *
    * @param int|null $pageIndex 分页页码
    *
    * @return $this
    */
    public function setPageIndex($pageIndex)
    {
        $this->container['pageIndex'] = $pageIndex;
        return $this;
    }

    /**
    * Gets pageSize
    *  分页查询每页条数
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 分页查询每页条数
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets name
    *  按主机集群名称搜索关键字
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 按主机集群名称搜索关键字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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

