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
    * clusterId  **参数解释**： 集群ID **取值范围**： 不涉及
    * clusterName  **参数解释**： 集群名称 **取值范围**： 不涉及
    * content  **参数解释**： 策略内容 **取值范围**： 不涉及
    * deployContent  **参数解释**： 部署内容 **取值范围**： 不涉及
    * parameters  **参数解释**： 参数 **取值范围**： 不涉及
    * policyName  **参数解释**： 策略名称 **取值范围**： 不涉及
    * policyId  **参数解释**： 策略ID **取值范围**： 不涉及
    * resources  **参数解释**： 资源 **取值范围**： 不涉及
    * templateId  **参数解释**： 模板ID **取值范围**： 不涉及
    * templateName  **参数解释**： 模板名称 **取值范围**： 不涉及
    * templateType  **参数解释**： 模板类型 **取值范围**： 不涉及
    * description  **参数解释**： 策略描述 **取值范围**： 不涉及
    * updateTime  **参数解释**： 更新时间 **取值范围**： 不涉及
    * createTime  **参数解释**： 创建时间 **取值范围**： 不涉及
    * imageNum  **参数解释**： 防护镜像数量 **取值范围**： 不涉及
    * labelsNum  **参数解释**： 防护标签数量 **取值范围**： 不涉及
    * status  **参数解释**： 状态 **取值范围**： 不涉及
    * whiteImages  **参数解释**： 白名单镜像 **取值范围**： 不涉及
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
    * clusterId  **参数解释**： 集群ID **取值范围**： 不涉及
    * clusterName  **参数解释**： 集群名称 **取值范围**： 不涉及
    * content  **参数解释**： 策略内容 **取值范围**： 不涉及
    * deployContent  **参数解释**： 部署内容 **取值范围**： 不涉及
    * parameters  **参数解释**： 参数 **取值范围**： 不涉及
    * policyName  **参数解释**： 策略名称 **取值范围**： 不涉及
    * policyId  **参数解释**： 策略ID **取值范围**： 不涉及
    * resources  **参数解释**： 资源 **取值范围**： 不涉及
    * templateId  **参数解释**： 模板ID **取值范围**： 不涉及
    * templateName  **参数解释**： 模板名称 **取值范围**： 不涉及
    * templateType  **参数解释**： 模板类型 **取值范围**： 不涉及
    * description  **参数解释**： 策略描述 **取值范围**： 不涉及
    * updateTime  **参数解释**： 更新时间 **取值范围**： 不涉及
    * createTime  **参数解释**： 创建时间 **取值范围**： 不涉及
    * imageNum  **参数解释**： 防护镜像数量 **取值范围**： 不涉及
    * labelsNum  **参数解释**： 防护标签数量 **取值范围**： 不涉及
    * status  **参数解释**： 状态 **取值范围**： 不涉及
    * whiteImages  **参数解释**： 白名单镜像 **取值范围**： 不涉及
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
    * clusterId  **参数解释**： 集群ID **取值范围**： 不涉及
    * clusterName  **参数解释**： 集群名称 **取值范围**： 不涉及
    * content  **参数解释**： 策略内容 **取值范围**： 不涉及
    * deployContent  **参数解释**： 部署内容 **取值范围**： 不涉及
    * parameters  **参数解释**： 参数 **取值范围**： 不涉及
    * policyName  **参数解释**： 策略名称 **取值范围**： 不涉及
    * policyId  **参数解释**： 策略ID **取值范围**： 不涉及
    * resources  **参数解释**： 资源 **取值范围**： 不涉及
    * templateId  **参数解释**： 模板ID **取值范围**： 不涉及
    * templateName  **参数解释**： 模板名称 **取值范围**： 不涉及
    * templateType  **参数解释**： 模板类型 **取值范围**： 不涉及
    * description  **参数解释**： 策略描述 **取值范围**： 不涉及
    * updateTime  **参数解释**： 更新时间 **取值范围**： 不涉及
    * createTime  **参数解释**： 创建时间 **取值范围**： 不涉及
    * imageNum  **参数解释**： 防护镜像数量 **取值范围**： 不涉及
    * labelsNum  **参数解释**： 防护标签数量 **取值范围**： 不涉及
    * status  **参数解释**： 状态 **取值范围**： 不涉及
    * whiteImages  **参数解释**： 白名单镜像 **取值范围**： 不涉及
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
    * clusterId  **参数解释**： 集群ID **取值范围**： 不涉及
    * clusterName  **参数解释**： 集群名称 **取值范围**： 不涉及
    * content  **参数解释**： 策略内容 **取值范围**： 不涉及
    * deployContent  **参数解释**： 部署内容 **取值范围**： 不涉及
    * parameters  **参数解释**： 参数 **取值范围**： 不涉及
    * policyName  **参数解释**： 策略名称 **取值范围**： 不涉及
    * policyId  **参数解释**： 策略ID **取值范围**： 不涉及
    * resources  **参数解释**： 资源 **取值范围**： 不涉及
    * templateId  **参数解释**： 模板ID **取值范围**： 不涉及
    * templateName  **参数解释**： 模板名称 **取值范围**： 不涉及
    * templateType  **参数解释**： 模板类型 **取值范围**： 不涉及
    * description  **参数解释**： 策略描述 **取值范围**： 不涉及
    * updateTime  **参数解释**： 更新时间 **取值范围**： 不涉及
    * createTime  **参数解释**： 创建时间 **取值范围**： 不涉及
    * imageNum  **参数解释**： 防护镜像数量 **取值范围**： 不涉及
    * labelsNum  **参数解释**： 防护标签数量 **取值范围**： 不涉及
    * status  **参数解释**： 状态 **取值范围**： 不涉及
    * whiteImages  **参数解释**： 白名单镜像 **取值范围**： 不涉及
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
    * clusterId  **参数解释**： 集群ID **取值范围**： 不涉及
    * clusterName  **参数解释**： 集群名称 **取值范围**： 不涉及
    * content  **参数解释**： 策略内容 **取值范围**： 不涉及
    * deployContent  **参数解释**： 部署内容 **取值范围**： 不涉及
    * parameters  **参数解释**： 参数 **取值范围**： 不涉及
    * policyName  **参数解释**： 策略名称 **取值范围**： 不涉及
    * policyId  **参数解释**： 策略ID **取值范围**： 不涉及
    * resources  **参数解释**： 资源 **取值范围**： 不涉及
    * templateId  **参数解释**： 模板ID **取值范围**： 不涉及
    * templateName  **参数解释**： 模板名称 **取值范围**： 不涉及
    * templateType  **参数解释**： 模板类型 **取值范围**： 不涉及
    * description  **参数解释**： 策略描述 **取值范围**： 不涉及
    * updateTime  **参数解释**： 更新时间 **取值范围**： 不涉及
    * createTime  **参数解释**： 创建时间 **取值范围**： 不涉及
    * imageNum  **参数解释**： 防护镜像数量 **取值范围**： 不涉及
    * labelsNum  **参数解释**： 防护标签数量 **取值范围**： 不涉及
    * status  **参数解释**： 状态 **取值范围**： 不涉及
    * whiteImages  **参数解释**： 白名单镜像 **取值范围**： 不涉及
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
    *  **参数解释**： 集群ID **取值范围**： 不涉及
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
    * @param string|null $clusterId **参数解释**： 集群ID **取值范围**： 不涉及
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
    *  **参数解释**： 集群名称 **取值范围**： 不涉及
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
    * @param string|null $clusterName **参数解释**： 集群名称 **取值范围**： 不涉及
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
    *  **参数解释**： 策略内容 **取值范围**： 不涉及
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
    * @param object|null $content **参数解释**： 策略内容 **取值范围**： 不涉及
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
    *  **参数解释**： 部署内容 **取值范围**： 不涉及
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
    * @param string|null $deployContent **参数解释**： 部署内容 **取值范围**： 不涉及
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
    *  **参数解释**： 参数 **取值范围**： 不涉及
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
    * @param string|null $parameters **参数解释**： 参数 **取值范围**： 不涉及
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
    *  **参数解释**： 策略名称 **取值范围**： 不涉及
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
    * @param string|null $policyName **参数解释**： 策略名称 **取值范围**： 不涉及
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
    *  **参数解释**： 策略ID **取值范围**： 不涉及
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
    * @param string|null $policyId **参数解释**： 策略ID **取值范围**： 不涉及
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
    *  **参数解释**： 资源 **取值范围**： 不涉及
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
    * @param \HuaweiCloud\SDK\Hss\V5\Model\Resources[]|null $resources **参数解释**： 资源 **取值范围**： 不涉及
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
    *  **参数解释**： 模板ID **取值范围**： 不涉及
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
    * @param string|null $templateId **参数解释**： 模板ID **取值范围**： 不涉及
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
    *  **参数解释**： 模板名称 **取值范围**： 不涉及
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
    * @param string|null $templateName **参数解释**： 模板名称 **取值范围**： 不涉及
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
    *  **参数解释**： 模板类型 **取值范围**： 不涉及
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
    * @param string|null $templateType **参数解释**： 模板类型 **取值范围**： 不涉及
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
    *  **参数解释**： 策略描述 **取值范围**： 不涉及
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
    * @param string|null $description **参数解释**： 策略描述 **取值范围**： 不涉及
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
    *  **参数解释**： 更新时间 **取值范围**： 不涉及
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
    * @param int|null $updateTime **参数解释**： 更新时间 **取值范围**： 不涉及
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
    *  **参数解释**： 创建时间 **取值范围**： 不涉及
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
    * @param int|null $createTime **参数解释**： 创建时间 **取值范围**： 不涉及
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
    *  **参数解释**： 防护镜像数量 **取值范围**： 不涉及
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
    * @param int|null $imageNum **参数解释**： 防护镜像数量 **取值范围**： 不涉及
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
    *  **参数解释**： 防护标签数量 **取值范围**： 不涉及
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
    * @param int|null $labelsNum **参数解释**： 防护标签数量 **取值范围**： 不涉及
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
    *  **参数解释**： 状态 **取值范围**： 不涉及
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
    * @param string|null $status **参数解释**： 状态 **取值范围**： 不涉及
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
    *  **参数解释**： 白名单镜像 **取值范围**： 不涉及
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
    * @param \HuaweiCloud\SDK\Hss\V5\Model\WhiteImageInfo[]|null $whiteImages **参数解释**： 白名单镜像 **取值范围**： 不涉及
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

