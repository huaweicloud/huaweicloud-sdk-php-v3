<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowIssueDetailRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowIssueDetailRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  devcloud项目的32位id
    * issueId  工作项唯一Id
    * issueType  工作项分类
    * domainId  项目所属domainId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'issueId' => 'string',
            'issueType' => 'string',
            'domainId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  devcloud项目的32位id
    * issueId  工作项唯一Id
    * issueType  工作项分类
    * domainId  项目所属domainId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'issueId' => null,
        'issueType' => null,
        'domainId' => null
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
    * projectId  devcloud项目的32位id
    * issueId  工作项唯一Id
    * issueType  工作项分类
    * domainId  项目所属domainId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'issueId' => 'issue_id',
            'issueType' => 'issue_type',
            'domainId' => 'domain_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  devcloud项目的32位id
    * issueId  工作项唯一Id
    * issueType  工作项分类
    * domainId  项目所属domainId
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'issueId' => 'setIssueId',
            'issueType' => 'setIssueType',
            'domainId' => 'setDomainId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  devcloud项目的32位id
    * issueId  工作项唯一Id
    * issueType  工作项分类
    * domainId  项目所属domainId
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'issueId' => 'getIssueId',
            'issueType' => 'getIssueType',
            'domainId' => 'getDomainId'
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
        $this->container['issueId'] = isset($data['issueId']) ? $data['issueId'] : null;
        $this->container['issueType'] = isset($data['issueType']) ? $data['issueType'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
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
        if ($this->container['issueId'] === null) {
            $invalidProperties[] = "'issueId' can't be null";
        }
        if ($this->container['issueType'] === null) {
            $invalidProperties[] = "'issueType' can't be null";
        }
            if ((mb_strlen($this->container['issueType']) > 32)) {
                $invalidProperties[] = "invalid value for 'issueType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['issueType']) < 1)) {
                $invalidProperties[] = "invalid value for 'issueType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 18)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 18.";
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
    *  devcloud项目的32位id
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
    * @param string $projectId devcloud项目的32位id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets issueId
    *  工作项唯一Id
    *
    * @return string
    */
    public function getIssueId()
    {
        return $this->container['issueId'];
    }

    /**
    * Sets issueId
    *
    * @param string $issueId 工作项唯一Id
    *
    * @return $this
    */
    public function setIssueId($issueId)
    {
        $this->container['issueId'] = $issueId;
        return $this;
    }

    /**
    * Gets issueType
    *  工作项分类
    *
    * @return string
    */
    public function getIssueType()
    {
        return $this->container['issueType'];
    }

    /**
    * Sets issueType
    *
    * @param string $issueType 工作项分类
    *
    * @return $this
    */
    public function setIssueType($issueType)
    {
        $this->container['issueType'] = $issueType;
        return $this;
    }

    /**
    * Gets domainId
    *  项目所属domainId
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 项目所属domainId
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
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

