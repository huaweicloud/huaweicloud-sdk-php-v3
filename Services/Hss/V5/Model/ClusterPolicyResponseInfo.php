<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterPolicyResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterPolicyResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  集群id
    * clusterName  集群名称
    * content  策略内容
    * deployContent  deploy内容
    * parameters  参数
    * policyName  策略名称
    * policyId  策略ID
    * resources  资源
    * templateId  模板ID
    * templateName  模板名称
    * templateType  模板类型
    * description  策略描述
    * updateTime  更新时间
    * createTime  创建时间
    * imageNum  防护镜像数量
    * labelsNum  防护标签数量
    * status  状态
    * whiteImages  白名单镜像
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'clusterName' => 'string',
            'content' => 'object',
            'deployContent' => 'string',
            'parameters' => 'string',
            'policyName' => 'string',
            'policyId' => 'string',
            'resources' => '\HuaweiCloud\SDK\Hss\V5\Model\Resources[]',
            'templateId' => 'string',
            'templateName' => 'string',
            'templateType' => 'string',
            'description' => 'string',
            'updateTime' => 'int',
            'createTime' => 'int',
            'imageNum' => 'int',
            'labelsNum' => 'int',
            'status' => 'string',
            'whiteImages' => '\HuaweiCloud\SDK\Hss\V5\Model\WhiteImageInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群id
    * clusterName  集群名称
    * content  策略内容
    * deployContent  deploy内容
    * parameters  参数
    * policyName  策略名称
    * policyId  策略ID
    * resources  资源
    * templateId  模板ID
    * templateName  模板名称
    * templateType  模板类型
    * description  策略描述
    * updateTime  更新时间
    * createTime  创建时间
    * imageNum  防护镜像数量
    * labelsNum  防护标签数量
    * status  状态
    * whiteImages  白名单镜像
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'clusterName' => null,
        'content' => null,
        'deployContent' => null,
        'parameters' => null,
        'policyName' => null,
        'policyId' => null,
        'resources' => null,
        'templateId' => null,
        'templateName' => null,
        'templateType' => null,
        'description' => null,
        'updateTime' => null,
        'createTime' => null,
        'imageNum' => null,
        'labelsNum' => null,
        'status' => null,
        'whiteImages' => null
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
    * clusterId  集群id
    * clusterName  集群名称
    * content  策略内容
    * deployContent  deploy内容
    * parameters  参数
    * policyName  策略名称
    * policyId  策略ID
    * resources  资源
    * templateId  模板ID
    * templateName  模板名称
    * templateType  模板类型
    * description  策略描述
    * updateTime  更新时间
    * createTime  创建时间
    * imageNum  防护镜像数量
    * labelsNum  防护标签数量
    * status  状态
    * whiteImages  白名单镜像
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'content' => 'content',
            'deployContent' => 'deploy_content',
            'parameters' => 'parameters',
            'policyName' => 'policy_name',
            'policyId' => 'policy_id',
            'resources' => 'resources',
            'templateId' => 'template_id',
            'templateName' => 'template_name',
            'templateType' => 'template_type',
            'description' => 'description',
            'updateTime' => 'update_time',
            'createTime' => 'create_time',
            'imageNum' => 'image_num',
            'labelsNum' => 'labels_num',
            'status' => 'status',
            'whiteImages' => 'white_images'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群id
    * clusterName  集群名称
    * content  策略内容
    * deployContent  deploy内容
    * parameters  参数
    * policyName  策略名称
    * policyId  策略ID
    * resources  资源
    * templateId  模板ID
    * templateName  模板名称
    * templateType  模板类型
    * description  策略描述
    * updateTime  更新时间
    * createTime  创建时间
    * imageNum  防护镜像数量
    * labelsNum  防护标签数量
    * status  状态
    * whiteImages  白名单镜像
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'content' => 'setContent',
            'deployContent' => 'setDeployContent',
            'parameters' => 'setParameters',
            'policyName' => 'setPolicyName',
            'policyId' => 'setPolicyId',
            'resources' => 'setResources',
            'templateId' => 'setTemplateId',
            'templateName' => 'setTemplateName',
            'templateType' => 'setTemplateType',
            'description' => 'setDescription',
            'updateTime' => 'setUpdateTime',
            'createTime' => 'setCreateTime',
            'imageNum' => 'setImageNum',
            'labelsNum' => 'setLabelsNum',
            'status' => 'setStatus',
            'whiteImages' => 'setWhiteImages'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群id
    * clusterName  集群名称
    * content  策略内容
    * deployContent  deploy内容
    * parameters  参数
    * policyName  策略名称
    * policyId  策略ID
    * resources  资源
    * templateId  模板ID
    * templateName  模板名称
    * templateType  模板类型
    * description  策略描述
    * updateTime  更新时间
    * createTime  创建时间
    * imageNum  防护镜像数量
    * labelsNum  防护标签数量
    * status  状态
    * whiteImages  白名单镜像
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'content' => 'getContent',
            'deployContent' => 'getDeployContent',
            'parameters' => 'getParameters',
            'policyName' => 'getPolicyName',
            'policyId' => 'getPolicyId',
            'resources' => 'getResources',
            'templateId' => 'getTemplateId',
            'templateName' => 'getTemplateName',
            'templateType' => 'getTemplateType',
            'description' => 'getDescription',
            'updateTime' => 'getUpdateTime',
            'createTime' => 'getCreateTime',
            'imageNum' => 'getImageNum',
            'labelsNum' => 'getLabelsNum',
            'status' => 'getStatus',
            'whiteImages' => 'getWhiteImages'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['deployContent'] = isset($data['deployContent']) ? $data['deployContent'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['templateType'] = isset($data['templateType']) ? $data['templateType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['imageNum'] = isset($data['imageNum']) ? $data['imageNum'] : null;
        $this->container['labelsNum'] = isset($data['labelsNum']) ? $data['labelsNum'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['whiteImages'] = isset($data['whiteImages']) ? $data['whiteImages'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['deployContent']) && (mb_strlen($this->container['deployContent']) > 256)) {
                $invalidProperties[] = "invalid value for 'deployContent', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['deployContent']) && (mb_strlen($this->container['deployContent']) < 1)) {
                $invalidProperties[] = "invalid value for 'deployContent', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['parameters']) && (mb_strlen($this->container['parameters']) > 256)) {
                $invalidProperties[] = "invalid value for 'parameters', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['parameters']) && (mb_strlen($this->container['parameters']) < 1)) {
                $invalidProperties[] = "invalid value for 'parameters', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['templateId']) && (mb_strlen($this->container['templateId']) > 64)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['templateId']) && (mb_strlen($this->container['templateId']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['templateName']) && (mb_strlen($this->container['templateName']) > 64)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['templateName']) && (mb_strlen($this->container['templateName']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['templateType']) && (mb_strlen($this->container['templateType']) > 64)) {
                $invalidProperties[] = "invalid value for 'templateType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['templateType']) && (mb_strlen($this->container['templateType']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 64)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageNum']) && ($this->container['imageNum'] > 10000)) {
                $invalidProperties[] = "invalid value for 'imageNum', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['imageNum']) && ($this->container['imageNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'imageNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['labelsNum']) && ($this->container['labelsNum'] > 10000)) {
                $invalidProperties[] = "invalid value for 'labelsNum', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['labelsNum']) && ($this->container['labelsNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'labelsNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 256)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
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
    * Gets clusterId
    *  集群id
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 集群id
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名称
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName 集群名称
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets content
    *  策略内容
    *
    * @return object|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param object|null $content 策略内容
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets deployContent
    *  deploy内容
    *
    * @return string|null
    */
    public function getDeployContent()
    {
        return $this->container['deployContent'];
    }

    /**
    * Sets deployContent
    *
    * @param string|null $deployContent deploy内容
    *
    * @return $this
    */
    public function setDeployContent($deployContent)
    {
        $this->container['deployContent'] = $deployContent;
        return $this;
    }

    /**
    * Gets parameters
    *  参数
    *
    * @return string|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param string|null $parameters 参数
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets policyName
    *  策略名称
    *
    * @return string|null
    */
    public function getPolicyName()
    {
        return $this->container['policyName'];
    }

    /**
    * Sets policyName
    *
    * @param string|null $policyName 策略名称
    *
    * @return $this
    */
    public function setPolicyName($policyName)
    {
        $this->container['policyName'] = $policyName;
        return $this;
    }

    /**
    * Gets policyId
    *  策略ID
    *
    * @return string|null
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string|null $policyId 策略ID
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets resources
    *  资源
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\Resources[]|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\Resources[]|null $resources 资源
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets templateId
    *  模板ID
    *
    * @return string|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string|null $templateId 模板ID
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets templateName
    *  模板名称
    *
    * @return string|null
    */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
    * Sets templateName
    *
    * @param string|null $templateName 模板名称
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets templateType
    *  模板类型
    *
    * @return string|null
    */
    public function getTemplateType()
    {
        return $this->container['templateType'];
    }

    /**
    * Sets templateType
    *
    * @param string|null $templateType 模板类型
    *
    * @return $this
    */
    public function setTemplateType($templateType)
    {
        $this->container['templateType'] = $templateType;
        return $this;
    }

    /**
    * Gets description
    *  策略描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 策略描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets imageNum
    *  防护镜像数量
    *
    * @return int|null
    */
    public function getImageNum()
    {
        return $this->container['imageNum'];
    }

    /**
    * Sets imageNum
    *
    * @param int|null $imageNum 防护镜像数量
    *
    * @return $this
    */
    public function setImageNum($imageNum)
    {
        $this->container['imageNum'] = $imageNum;
        return $this;
    }

    /**
    * Gets labelsNum
    *  防护标签数量
    *
    * @return int|null
    */
    public function getLabelsNum()
    {
        return $this->container['labelsNum'];
    }

    /**
    * Sets labelsNum
    *
    * @param int|null $labelsNum 防护标签数量
    *
    * @return $this
    */
    public function setLabelsNum($labelsNum)
    {
        $this->container['labelsNum'] = $labelsNum;
        return $this;
    }

    /**
    * Gets status
    *  状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets whiteImages
    *  白名单镜像
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\WhiteImageInfo[]|null
    */
    public function getWhiteImages()
    {
        return $this->container['whiteImages'];
    }

    /**
    * Sets whiteImages
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\WhiteImageInfo[]|null $whiteImages 白名单镜像
    *
    * @return $this
    */
    public function setWhiteImages($whiteImages)
    {
        $this->container['whiteImages'] = $whiteImages;
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

