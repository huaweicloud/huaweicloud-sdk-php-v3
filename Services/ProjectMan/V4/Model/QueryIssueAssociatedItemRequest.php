<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryIssueAssociatedItemRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryIssueAssociatedItemRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * issueId  工作项唯一ID。可以通过查询工作项列表或者查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。
    * issueType  工作项类型。
    * domainId  项目空间ID，可以通过查询IPD项目列表接口获取，响应消息体中的domain_id字段的值就是项目空间ID。
    * targetProjectId  目标项目的32位uuid，项目唯一标识，通过查询IPD项目列表获取，响应消息体中的project_id字段的值就是项目ID。
    * linkFieldCode  关联字段的字段编码。
    * pageNo  分页参数，当前页。
    * pageSize  分页参数，页长。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'issueId' => 'string',
            'issueType' => 'string',
            'domainId' => 'string',
            'targetProjectId' => 'string',
            'linkFieldCode' => 'string',
            'pageNo' => 'string',
            'pageSize' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * issueId  工作项唯一ID。可以通过查询工作项列表或者查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。
    * issueType  工作项类型。
    * domainId  项目空间ID，可以通过查询IPD项目列表接口获取，响应消息体中的domain_id字段的值就是项目空间ID。
    * targetProjectId  目标项目的32位uuid，项目唯一标识，通过查询IPD项目列表获取，响应消息体中的project_id字段的值就是项目ID。
    * linkFieldCode  关联字段的字段编码。
    * pageNo  分页参数，当前页。
    * pageSize  分页参数，页长。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'issueId' => null,
        'issueType' => null,
        'domainId' => null,
        'targetProjectId' => null,
        'linkFieldCode' => null,
        'pageNo' => null,
        'pageSize' => null
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
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * issueId  工作项唯一ID。可以通过查询工作项列表或者查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。
    * issueType  工作项类型。
    * domainId  项目空间ID，可以通过查询IPD项目列表接口获取，响应消息体中的domain_id字段的值就是项目空间ID。
    * targetProjectId  目标项目的32位uuid，项目唯一标识，通过查询IPD项目列表获取，响应消息体中的project_id字段的值就是项目ID。
    * linkFieldCode  关联字段的字段编码。
    * pageNo  分页参数，当前页。
    * pageSize  分页参数，页长。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'issueId' => 'issue_id',
            'issueType' => 'issue_type',
            'domainId' => 'domain_id',
            'targetProjectId' => 'target_project_id',
            'linkFieldCode' => 'link_field_code',
            'pageNo' => 'page_no',
            'pageSize' => 'page_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * issueId  工作项唯一ID。可以通过查询工作项列表或者查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。
    * issueType  工作项类型。
    * domainId  项目空间ID，可以通过查询IPD项目列表接口获取，响应消息体中的domain_id字段的值就是项目空间ID。
    * targetProjectId  目标项目的32位uuid，项目唯一标识，通过查询IPD项目列表获取，响应消息体中的project_id字段的值就是项目ID。
    * linkFieldCode  关联字段的字段编码。
    * pageNo  分页参数，当前页。
    * pageSize  分页参数，页长。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'issueId' => 'setIssueId',
            'issueType' => 'setIssueType',
            'domainId' => 'setDomainId',
            'targetProjectId' => 'setTargetProjectId',
            'linkFieldCode' => 'setLinkFieldCode',
            'pageNo' => 'setPageNo',
            'pageSize' => 'setPageSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * issueId  工作项唯一ID。可以通过查询工作项列表或者查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。
    * issueType  工作项类型。
    * domainId  项目空间ID，可以通过查询IPD项目列表接口获取，响应消息体中的domain_id字段的值就是项目空间ID。
    * targetProjectId  目标项目的32位uuid，项目唯一标识，通过查询IPD项目列表获取，响应消息体中的project_id字段的值就是项目ID。
    * linkFieldCode  关联字段的字段编码。
    * pageNo  分页参数，当前页。
    * pageSize  分页参数，页长。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'issueId' => 'getIssueId',
            'issueType' => 'getIssueType',
            'domainId' => 'getDomainId',
            'targetProjectId' => 'getTargetProjectId',
            'linkFieldCode' => 'getLinkFieldCode',
            'pageNo' => 'getPageNo',
            'pageSize' => 'getPageSize'
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
        $this->container['targetProjectId'] = isset($data['targetProjectId']) ? $data['targetProjectId'] : null;
        $this->container['linkFieldCode'] = isset($data['linkFieldCode']) ? $data['linkFieldCode'] : null;
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
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
        if ($this->container['issueId'] === null) {
            $invalidProperties[] = "'issueId' can't be null";
        }
            if ((mb_strlen($this->container['issueId']) > 19)) {
                $invalidProperties[] = "invalid value for 'issueId', the character length must be smaller than or equal to 19.";
            }
            if ((mb_strlen($this->container['issueId']) < 18)) {
                $invalidProperties[] = "invalid value for 'issueId', the character length must be bigger than or equal to 18.";
            }
        if ($this->container['issueType'] === null) {
            $invalidProperties[] = "'issueType' can't be null";
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
    *  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
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
    * @param string $projectId 项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
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
    *  工作项唯一ID。可以通过查询工作项列表或者查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。
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
    * @param string $issueId 工作项唯一ID。可以通过查询工作项列表或者查询树状工作项接口获取，响应消息体中的id字段的值就是工作项ID。
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
    *  工作项类型。
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
    * @param string $issueType 工作项类型。
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
    *  项目空间ID，可以通过查询IPD项目列表接口获取，响应消息体中的domain_id字段的值就是项目空间ID。
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
    * @param string|null $domainId 项目空间ID，可以通过查询IPD项目列表接口获取，响应消息体中的domain_id字段的值就是项目空间ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets targetProjectId
    *  目标项目的32位uuid，项目唯一标识，通过查询IPD项目列表获取，响应消息体中的project_id字段的值就是项目ID。
    *
    * @return string|null
    */
    public function getTargetProjectId()
    {
        return $this->container['targetProjectId'];
    }

    /**
    * Sets targetProjectId
    *
    * @param string|null $targetProjectId 目标项目的32位uuid，项目唯一标识，通过查询IPD项目列表获取，响应消息体中的project_id字段的值就是项目ID。
    *
    * @return $this
    */
    public function setTargetProjectId($targetProjectId)
    {
        $this->container['targetProjectId'] = $targetProjectId;
        return $this;
    }

    /**
    * Gets linkFieldCode
    *  关联字段的字段编码。
    *
    * @return string|null
    */
    public function getLinkFieldCode()
    {
        return $this->container['linkFieldCode'];
    }

    /**
    * Sets linkFieldCode
    *
    * @param string|null $linkFieldCode 关联字段的字段编码。
    *
    * @return $this
    */
    public function setLinkFieldCode($linkFieldCode)
    {
        $this->container['linkFieldCode'] = $linkFieldCode;
        return $this;
    }

    /**
    * Gets pageNo
    *  分页参数，当前页。
    *
    * @return string|null
    */
    public function getPageNo()
    {
        return $this->container['pageNo'];
    }

    /**
    * Sets pageNo
    *
    * @param string|null $pageNo 分页参数，当前页。
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
    *  分页参数，页长。
    *
    * @return string|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param string|null $pageSize 分页参数，页长。
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
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

