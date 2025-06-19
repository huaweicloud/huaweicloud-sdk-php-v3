<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListReportsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListReportsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID，固定长度32位字符（字母和数字）。
    * pageSize  每页显示的条目数量,最大支持200条
    * offset  页数，page_no大于等于1
    * versionId  版本id
    * type  报表类型 1：首页用例库， 2：质量报告
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'pageSize' => 'int',
            'offset' => 'int',
            'versionId' => 'string',
            'type' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID，固定长度32位字符（字母和数字）。
    * pageSize  每页显示的条目数量,最大支持200条
    * offset  页数，page_no大于等于1
    * versionId  版本id
    * type  报表类型 1：首页用例库， 2：质量报告
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'pageSize' => 'int64',
        'offset' => 'int64',
        'versionId' => null,
        'type' => null
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
    * projectId  项目ID，固定长度32位字符（字母和数字）。
    * pageSize  每页显示的条目数量,最大支持200条
    * offset  页数，page_no大于等于1
    * versionId  版本id
    * type  报表类型 1：首页用例库， 2：质量报告
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'pageSize' => 'page_size',
            'offset' => 'offset',
            'versionId' => 'version_id',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID，固定长度32位字符（字母和数字）。
    * pageSize  每页显示的条目数量,最大支持200条
    * offset  页数，page_no大于等于1
    * versionId  版本id
    * type  报表类型 1：首页用例库， 2：质量报告
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'pageSize' => 'setPageSize',
            'offset' => 'setOffset',
            'versionId' => 'setVersionId',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID，固定长度32位字符（字母和数字）。
    * pageSize  每页显示的条目数量,最大支持200条
    * offset  页数，page_no大于等于1
    * versionId  版本id
    * type  报表类型 1：首页用例库， 2：质量报告
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'pageSize' => 'getPageSize',
            'offset' => 'getOffset',
            'versionId' => 'getVersionId',
            'type' => 'getType'
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
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['versionId'] = isset($data['versionId']) ? $data['versionId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/^[A-Za-z0-9]{32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
        if ($this->container['pageSize'] === null) {
            $invalidProperties[] = "'pageSize' can't be null";
        }
            if (($this->container['pageSize'] > 200)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be smaller than or equal to 200.";
            }
            if (($this->container['pageSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 1.";
            }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (($this->container['offset'] > 20000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 20000.";
            }
            if (($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
        if ($this->container['versionId'] === null) {
            $invalidProperties[] = "'versionId' can't be null";
        }
            if ((mb_strlen($this->container['versionId']) > 34)) {
                $invalidProperties[] = "invalid value for 'versionId', the character length must be smaller than or equal to 34.";
            }
            if ((mb_strlen($this->container['versionId']) < 11)) {
                $invalidProperties[] = "invalid value for 'versionId', the character length must be bigger than or equal to 11.";
            }
            if (!preg_match("/^[A-Za-z0-9]{11,34}$/", $this->container['versionId'])) {
                $invalidProperties[] = "invalid value for 'versionId', must be conform to the pattern /^[A-Za-z0-9]{11,34}$/.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if (($this->container['type'] > 2)) {
                $invalidProperties[] = "invalid value for 'type', must be smaller than or equal to 2.";
            }
            if (($this->container['type'] < 1)) {
                $invalidProperties[] = "invalid value for 'type', must be bigger than or equal to 1.";
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
    *  项目ID，固定长度32位字符（字母和数字）。
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
    * @param string $projectId 项目ID，固定长度32位字符（字母和数字）。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页显示的条目数量,最大支持200条
    *
    * @return int
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int $pageSize 每页显示的条目数量,最大支持200条
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets offset
    *  页数，page_no大于等于1
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
    * @param int $offset 页数，page_no大于等于1
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets versionId
    *  版本id
    *
    * @return string
    */
    public function getVersionId()
    {
        return $this->container['versionId'];
    }

    /**
    * Sets versionId
    *
    * @param string $versionId 版本id
    *
    * @return $this
    */
    public function setVersionId($versionId)
    {
        $this->container['versionId'] = $versionId;
        return $this;
    }

    /**
    * Gets type
    *  报表类型 1：首页用例库， 2：质量报告
    *
    * @return int
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int $type 报表类型 1：首页用例库， 2：质量报告
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

