<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTestCaseReviewsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTestCaseReviewsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectUuid  项目id
    * versionUri  版本URI
    * pageNo  当前页数
    * pageSize  每页条数
    * testcaseUri  分支用例URI
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectUuid' => 'string',
            'versionUri' => 'string',
            'pageNo' => 'int',
            'pageSize' => 'int',
            'testcaseUri' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectUuid  项目id
    * versionUri  版本URI
    * pageNo  当前页数
    * pageSize  每页条数
    * testcaseUri  分支用例URI
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectUuid' => null,
        'versionUri' => null,
        'pageNo' => null,
        'pageSize' => null,
        'testcaseUri' => null
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
    * projectUuid  项目id
    * versionUri  版本URI
    * pageNo  当前页数
    * pageSize  每页条数
    * testcaseUri  分支用例URI
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectUuid' => 'project_uuid',
            'versionUri' => 'version_uri',
            'pageNo' => 'page_no',
            'pageSize' => 'page_size',
            'testcaseUri' => 'testcase_uri'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectUuid  项目id
    * versionUri  版本URI
    * pageNo  当前页数
    * pageSize  每页条数
    * testcaseUri  分支用例URI
    *
    * @var string[]
    */
    protected static $setters = [
            'projectUuid' => 'setProjectUuid',
            'versionUri' => 'setVersionUri',
            'pageNo' => 'setPageNo',
            'pageSize' => 'setPageSize',
            'testcaseUri' => 'setTestcaseUri'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectUuid  项目id
    * versionUri  版本URI
    * pageNo  当前页数
    * pageSize  每页条数
    * testcaseUri  分支用例URI
    *
    * @var string[]
    */
    protected static $getters = [
            'projectUuid' => 'getProjectUuid',
            'versionUri' => 'getVersionUri',
            'pageNo' => 'getPageNo',
            'pageSize' => 'getPageSize',
            'testcaseUri' => 'getTestcaseUri'
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
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['versionUri'] = isset($data['versionUri']) ? $data['versionUri'] : null;
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['testcaseUri'] = isset($data['testcaseUri']) ? $data['testcaseUri'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectUuid'] === null) {
            $invalidProperties[] = "'projectUuid' can't be null";
        }
        if ($this->container['versionUri'] === null) {
            $invalidProperties[] = "'versionUri' can't be null";
        }
        if ($this->container['pageNo'] === null) {
            $invalidProperties[] = "'pageNo' can't be null";
        }
            if (($this->container['pageNo'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageNo', must be bigger than or equal to 1.";
            }
        if ($this->container['pageSize'] === null) {
            $invalidProperties[] = "'pageSize' can't be null";
        }
            if (($this->container['pageSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 1.";
            }
        if ($this->container['testcaseUri'] === null) {
            $invalidProperties[] = "'testcaseUri' can't be null";
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
    * Gets versionUri
    *  版本URI
    *
    * @return string
    */
    public function getVersionUri()
    {
        return $this->container['versionUri'];
    }

    /**
    * Sets versionUri
    *
    * @param string $versionUri 版本URI
    *
    * @return $this
    */
    public function setVersionUri($versionUri)
    {
        $this->container['versionUri'] = $versionUri;
        return $this;
    }

    /**
    * Gets pageNo
    *  当前页数
    *
    * @return int
    */
    public function getPageNo()
    {
        return $this->container['pageNo'];
    }

    /**
    * Sets pageNo
    *
    * @param int $pageNo 当前页数
    *
    * @return $this
    */
    public function setPageNo($pageNo)
    {
        $this->container['pageNo'] = $pageNo;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页条数
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
    * @param int $pageSize 每页条数
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets testcaseUri
    *  分支用例URI
    *
    * @return string
    */
    public function getTestcaseUri()
    {
        return $this->container['testcaseUri'];
    }

    /**
    * Sets testcaseUri
    *
    * @param string $testcaseUri 分支用例URI
    *
    * @return $this
    */
    public function setTestcaseUri($testcaseUri)
    {
        $this->container['testcaseUri'] = $testcaseUri;
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

