<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PrivilegeProjectInfoV5 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PrivilegeProjectInfoV5';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：  项目的序号。 **取值范围**： 不涉及。
    * name  **参数解释**： 项目的名称。 **取值范围**： 不涉及。
    * status  **参数解释**： 项目的状态（该参数无返回值，请忽略）。 **取值范围**： 该参数无返回值，请忽略。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * createdTime  **参数解释**： 项目的创建时间。 **取值范围**： 格式为yyyy-MM-dd HH:mm:ss。
    * repositoryNum  **参数解释**： 仓库数量。 **取值范围**： 不涉及。
    * total  **参数解释**： 项目总数（该参数无返回值，请忽略）。 **取值范围**： 该参数无返回值，请忽略。
    * repositoryId  **参数解释**： 仓库ID。 **取值范围**： 不涉及。
    * region  **参数解释**： 项目所属的区域。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * ids  **参数解释**： 项目的序号列表（该参数无返回值，请忽略）。 **取值范围**： 该参数无返回值，请忽略。
    * totalRecords  **参数解释**： 项目总数。 **取值范围**： 不涉及。
    * associated  **参数解释**： 请求参数中的仓库ID是否关联到本项目。 **取值范围**： - true：关联到本项目。 - false：未关联到本项目。
    * projectInfo  **参数解释**： 项目的信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'projectId' => 'string',
            'createdTime' => 'string',
            'repositoryNum' => 'int',
            'total' => 'int',
            'repositoryId' => 'string',
            'region' => 'string',
            'domainId' => 'string',
            'ids' => 'string[]',
            'totalRecords' => 'int',
            'associated' => 'bool',
            'projectInfo' => '\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\PrivilegeProjectInfoV5[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：  项目的序号。 **取值范围**： 不涉及。
    * name  **参数解释**： 项目的名称。 **取值范围**： 不涉及。
    * status  **参数解释**： 项目的状态（该参数无返回值，请忽略）。 **取值范围**： 该参数无返回值，请忽略。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * createdTime  **参数解释**： 项目的创建时间。 **取值范围**： 格式为yyyy-MM-dd HH:mm:ss。
    * repositoryNum  **参数解释**： 仓库数量。 **取值范围**： 不涉及。
    * total  **参数解释**： 项目总数（该参数无返回值，请忽略）。 **取值范围**： 该参数无返回值，请忽略。
    * repositoryId  **参数解释**： 仓库ID。 **取值范围**： 不涉及。
    * region  **参数解释**： 项目所属的区域。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * ids  **参数解释**： 项目的序号列表（该参数无返回值，请忽略）。 **取值范围**： 该参数无返回值，请忽略。
    * totalRecords  **参数解释**： 项目总数。 **取值范围**： 不涉及。
    * associated  **参数解释**： 请求参数中的仓库ID是否关联到本项目。 **取值范围**： - true：关联到本项目。 - false：未关联到本项目。
    * projectInfo  **参数解释**： 项目的信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'projectId' => null,
        'createdTime' => null,
        'repositoryNum' => 'int32',
        'total' => 'int32',
        'repositoryId' => null,
        'region' => null,
        'domainId' => null,
        'ids' => null,
        'totalRecords' => 'int32',
        'associated' => null,
        'projectInfo' => null
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
    * id  **参数解释**：  项目的序号。 **取值范围**： 不涉及。
    * name  **参数解释**： 项目的名称。 **取值范围**： 不涉及。
    * status  **参数解释**： 项目的状态（该参数无返回值，请忽略）。 **取值范围**： 该参数无返回值，请忽略。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * createdTime  **参数解释**： 项目的创建时间。 **取值范围**： 格式为yyyy-MM-dd HH:mm:ss。
    * repositoryNum  **参数解释**： 仓库数量。 **取值范围**： 不涉及。
    * total  **参数解释**： 项目总数（该参数无返回值，请忽略）。 **取值范围**： 该参数无返回值，请忽略。
    * repositoryId  **参数解释**： 仓库ID。 **取值范围**： 不涉及。
    * region  **参数解释**： 项目所属的区域。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * ids  **参数解释**： 项目的序号列表（该参数无返回值，请忽略）。 **取值范围**： 该参数无返回值，请忽略。
    * totalRecords  **参数解释**： 项目总数。 **取值范围**： 不涉及。
    * associated  **参数解释**： 请求参数中的仓库ID是否关联到本项目。 **取值范围**： - true：关联到本项目。 - false：未关联到本项目。
    * projectInfo  **参数解释**： 项目的信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'projectId' => 'project_id',
            'createdTime' => 'created_time',
            'repositoryNum' => 'repository_num',
            'total' => 'total',
            'repositoryId' => 'repository_id',
            'region' => 'region',
            'domainId' => 'domain_id',
            'ids' => 'ids',
            'totalRecords' => 'total_records',
            'associated' => 'associated',
            'projectInfo' => 'project_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：  项目的序号。 **取值范围**： 不涉及。
    * name  **参数解释**： 项目的名称。 **取值范围**： 不涉及。
    * status  **参数解释**： 项目的状态（该参数无返回值，请忽略）。 **取值范围**： 该参数无返回值，请忽略。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * createdTime  **参数解释**： 项目的创建时间。 **取值范围**： 格式为yyyy-MM-dd HH:mm:ss。
    * repositoryNum  **参数解释**： 仓库数量。 **取值范围**： 不涉及。
    * total  **参数解释**： 项目总数（该参数无返回值，请忽略）。 **取值范围**： 该参数无返回值，请忽略。
    * repositoryId  **参数解释**： 仓库ID。 **取值范围**： 不涉及。
    * region  **参数解释**： 项目所属的区域。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * ids  **参数解释**： 项目的序号列表（该参数无返回值，请忽略）。 **取值范围**： 该参数无返回值，请忽略。
    * totalRecords  **参数解释**： 项目总数。 **取值范围**： 不涉及。
    * associated  **参数解释**： 请求参数中的仓库ID是否关联到本项目。 **取值范围**： - true：关联到本项目。 - false：未关联到本项目。
    * projectInfo  **参数解释**： 项目的信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'projectId' => 'setProjectId',
            'createdTime' => 'setCreatedTime',
            'repositoryNum' => 'setRepositoryNum',
            'total' => 'setTotal',
            'repositoryId' => 'setRepositoryId',
            'region' => 'setRegion',
            'domainId' => 'setDomainId',
            'ids' => 'setIds',
            'totalRecords' => 'setTotalRecords',
            'associated' => 'setAssociated',
            'projectInfo' => 'setProjectInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：  项目的序号。 **取值范围**： 不涉及。
    * name  **参数解释**： 项目的名称。 **取值范围**： 不涉及。
    * status  **参数解释**： 项目的状态（该参数无返回值，请忽略）。 **取值范围**： 该参数无返回值，请忽略。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * createdTime  **参数解释**： 项目的创建时间。 **取值范围**： 格式为yyyy-MM-dd HH:mm:ss。
    * repositoryNum  **参数解释**： 仓库数量。 **取值范围**： 不涉及。
    * total  **参数解释**： 项目总数（该参数无返回值，请忽略）。 **取值范围**： 该参数无返回值，请忽略。
    * repositoryId  **参数解释**： 仓库ID。 **取值范围**： 不涉及。
    * region  **参数解释**： 项目所属的区域。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * ids  **参数解释**： 项目的序号列表（该参数无返回值，请忽略）。 **取值范围**： 该参数无返回值，请忽略。
    * totalRecords  **参数解释**： 项目总数。 **取值范围**： 不涉及。
    * associated  **参数解释**： 请求参数中的仓库ID是否关联到本项目。 **取值范围**： - true：关联到本项目。 - false：未关联到本项目。
    * projectInfo  **参数解释**： 项目的信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'projectId' => 'getProjectId',
            'createdTime' => 'getCreatedTime',
            'repositoryNum' => 'getRepositoryNum',
            'total' => 'getTotal',
            'repositoryId' => 'getRepositoryId',
            'region' => 'getRegion',
            'domainId' => 'getDomainId',
            'ids' => 'getIds',
            'totalRecords' => 'getTotalRecords',
            'associated' => 'getAssociated',
            'projectInfo' => 'getProjectInfo'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['repositoryNum'] = isset($data['repositoryNum']) ? $data['repositoryNum'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
        $this->container['totalRecords'] = isset($data['totalRecords']) ? $data['totalRecords'] : null;
        $this->container['associated'] = isset($data['associated']) ? $data['associated'] : null;
        $this->container['projectInfo'] = isset($data['projectInfo']) ? $data['projectInfo'] : null;
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
    * Gets id
    *  **参数解释**：  项目的序号。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**：  项目的序号。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 项目的名称。 **取值范围**： 不涉及。
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
    * @param string|null $name **参数解释**： 项目的名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 项目的状态（该参数无返回值，请忽略）。 **取值范围**： 该参数无返回值，请忽略。
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
    * @param string|null $status **参数解释**： 项目的状态（该参数无返回值，请忽略）。 **取值范围**： 该参数无返回值，请忽略。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId **参数解释**： 项目ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets createdTime
    *  **参数解释**： 项目的创建时间。 **取值范围**： 格式为yyyy-MM-dd HH:mm:ss。
    *
    * @return string|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string|null $createdTime **参数解释**： 项目的创建时间。 **取值范围**： 格式为yyyy-MM-dd HH:mm:ss。
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets repositoryNum
    *  **参数解释**： 仓库数量。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getRepositoryNum()
    {
        return $this->container['repositoryNum'];
    }

    /**
    * Sets repositoryNum
    *
    * @param int|null $repositoryNum **参数解释**： 仓库数量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRepositoryNum($repositoryNum)
    {
        $this->container['repositoryNum'] = $repositoryNum;
        return $this;
    }

    /**
    * Gets total
    *  **参数解释**： 项目总数（该参数无返回值，请忽略）。 **取值范围**： 该参数无返回值，请忽略。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total **参数解释**： 项目总数（该参数无返回值，请忽略）。 **取值范围**： 该参数无返回值，请忽略。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets repositoryId
    *  **参数解释**： 仓库ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getRepositoryId()
    {
        return $this->container['repositoryId'];
    }

    /**
    * Sets repositoryId
    *
    * @param string|null $repositoryId **参数解释**： 仓库ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets region
    *  **参数解释**： 项目所属的区域。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region **参数解释**： 项目所属的区域。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets domainId
    *  **参数解释**： 租户ID。 **取值范围**： 不涉及。
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
    * @param string|null $domainId **参数解释**： 租户ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets ids
    *  **参数解释**： 项目的序号列表（该参数无返回值，请忽略）。 **取值范围**： 该参数无返回值，请忽略。
    *
    * @return string[]|null
    */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
    * Sets ids
    *
    * @param string[]|null $ids **参数解释**： 项目的序号列表（该参数无返回值，请忽略）。 **取值范围**： 该参数无返回值，请忽略。
    *
    * @return $this
    */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;
        return $this;
    }

    /**
    * Gets totalRecords
    *  **参数解释**： 项目总数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getTotalRecords()
    {
        return $this->container['totalRecords'];
    }

    /**
    * Sets totalRecords
    *
    * @param int|null $totalRecords **参数解释**： 项目总数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTotalRecords($totalRecords)
    {
        $this->container['totalRecords'] = $totalRecords;
        return $this;
    }

    /**
    * Gets associated
    *  **参数解释**： 请求参数中的仓库ID是否关联到本项目。 **取值范围**： - true：关联到本项目。 - false：未关联到本项目。
    *
    * @return bool|null
    */
    public function getAssociated()
    {
        return $this->container['associated'];
    }

    /**
    * Sets associated
    *
    * @param bool|null $associated **参数解释**： 请求参数中的仓库ID是否关联到本项目。 **取值范围**： - true：关联到本项目。 - false：未关联到本项目。
    *
    * @return $this
    */
    public function setAssociated($associated)
    {
        $this->container['associated'] = $associated;
        return $this;
    }

    /**
    * Gets projectInfo
    *  **参数解释**： 项目的信息。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\PrivilegeProjectInfoV5[]|null
    */
    public function getProjectInfo()
    {
        return $this->container['projectInfo'];
    }

    /**
    * Sets projectInfo
    *
    * @param \HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\PrivilegeProjectInfoV5[]|null $projectInfo **参数解释**： 项目的信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setProjectInfo($projectInfo)
    {
        $this->container['projectInfo'] = $projectInfo;
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

