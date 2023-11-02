<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataSource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataSource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * datasourceName  数据连接名称
    * datasourceType  数据连接类型
    * datasourceGuid  数据连接guid
    * datasourceQualifiedName  数据连接唯一标识名称
    * obsFolderCount  obs目录数
    * obsFileCount  obs文件数
    * cssIndexCount  css索引数
    * cssIndexFieldCount  css 索引字段数目
    * namespaceCount  命名空间数
    * gesVertexCount  ges点的总数
    * gesEdgeCount  ges边的总数
    * databaseCount  数据库总数
    * streamCount  通道总数
    * tableCount  表总数
    * dataSize  数据大小
    * databases  数据库统计信息
    * folders  顶层目录统计信息
    * cssIndices  css索引统计信息
    * namespaces  命名空间统计信息
    * disStreams  通道统计信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'datasourceName' => 'string',
            'datasourceType' => 'string',
            'datasourceGuid' => 'string',
            'datasourceQualifiedName' => 'string',
            'obsFolderCount' => 'int',
            'obsFileCount' => 'int',
            'cssIndexCount' => 'int',
            'cssIndexFieldCount' => 'int',
            'namespaceCount' => 'int',
            'gesVertexCount' => 'int',
            'gesEdgeCount' => 'int',
            'databaseCount' => 'int',
            'streamCount' => 'int',
            'tableCount' => 'int',
            'dataSize' => 'int',
            'databases' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\Database[]',
            'folders' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ObsFolder[]',
            'cssIndices' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CssIndex[]',
            'namespaces' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModelNamespace[]',
            'disStreams' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DisStream[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * datasourceName  数据连接名称
    * datasourceType  数据连接类型
    * datasourceGuid  数据连接guid
    * datasourceQualifiedName  数据连接唯一标识名称
    * obsFolderCount  obs目录数
    * obsFileCount  obs文件数
    * cssIndexCount  css索引数
    * cssIndexFieldCount  css 索引字段数目
    * namespaceCount  命名空间数
    * gesVertexCount  ges点的总数
    * gesEdgeCount  ges边的总数
    * databaseCount  数据库总数
    * streamCount  通道总数
    * tableCount  表总数
    * dataSize  数据大小
    * databases  数据库统计信息
    * folders  顶层目录统计信息
    * cssIndices  css索引统计信息
    * namespaces  命名空间统计信息
    * disStreams  通道统计信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'datasourceName' => null,
        'datasourceType' => null,
        'datasourceGuid' => null,
        'datasourceQualifiedName' => null,
        'obsFolderCount' => null,
        'obsFileCount' => null,
        'cssIndexCount' => null,
        'cssIndexFieldCount' => null,
        'namespaceCount' => null,
        'gesVertexCount' => null,
        'gesEdgeCount' => null,
        'databaseCount' => null,
        'streamCount' => null,
        'tableCount' => null,
        'dataSize' => null,
        'databases' => null,
        'folders' => null,
        'cssIndices' => null,
        'namespaces' => null,
        'disStreams' => null
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
    * datasourceName  数据连接名称
    * datasourceType  数据连接类型
    * datasourceGuid  数据连接guid
    * datasourceQualifiedName  数据连接唯一标识名称
    * obsFolderCount  obs目录数
    * obsFileCount  obs文件数
    * cssIndexCount  css索引数
    * cssIndexFieldCount  css 索引字段数目
    * namespaceCount  命名空间数
    * gesVertexCount  ges点的总数
    * gesEdgeCount  ges边的总数
    * databaseCount  数据库总数
    * streamCount  通道总数
    * tableCount  表总数
    * dataSize  数据大小
    * databases  数据库统计信息
    * folders  顶层目录统计信息
    * cssIndices  css索引统计信息
    * namespaces  命名空间统计信息
    * disStreams  通道统计信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'datasourceName' => 'datasource_name',
            'datasourceType' => 'datasource_type',
            'datasourceGuid' => 'datasource_guid',
            'datasourceQualifiedName' => 'datasource_qualified_name',
            'obsFolderCount' => 'obs_folder_count',
            'obsFileCount' => 'obs_file_count',
            'cssIndexCount' => 'css_index_count',
            'cssIndexFieldCount' => 'css_index_field_count',
            'namespaceCount' => 'namespace_count',
            'gesVertexCount' => 'ges_vertex_count',
            'gesEdgeCount' => 'ges_edge_count',
            'databaseCount' => 'database_count',
            'streamCount' => 'stream_count',
            'tableCount' => 'table_count',
            'dataSize' => 'data_size',
            'databases' => 'databases',
            'folders' => 'folders',
            'cssIndices' => 'css_indices',
            'namespaces' => 'namespaces',
            'disStreams' => 'dis_streams'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * datasourceName  数据连接名称
    * datasourceType  数据连接类型
    * datasourceGuid  数据连接guid
    * datasourceQualifiedName  数据连接唯一标识名称
    * obsFolderCount  obs目录数
    * obsFileCount  obs文件数
    * cssIndexCount  css索引数
    * cssIndexFieldCount  css 索引字段数目
    * namespaceCount  命名空间数
    * gesVertexCount  ges点的总数
    * gesEdgeCount  ges边的总数
    * databaseCount  数据库总数
    * streamCount  通道总数
    * tableCount  表总数
    * dataSize  数据大小
    * databases  数据库统计信息
    * folders  顶层目录统计信息
    * cssIndices  css索引统计信息
    * namespaces  命名空间统计信息
    * disStreams  通道统计信息
    *
    * @var string[]
    */
    protected static $setters = [
            'datasourceName' => 'setDatasourceName',
            'datasourceType' => 'setDatasourceType',
            'datasourceGuid' => 'setDatasourceGuid',
            'datasourceQualifiedName' => 'setDatasourceQualifiedName',
            'obsFolderCount' => 'setObsFolderCount',
            'obsFileCount' => 'setObsFileCount',
            'cssIndexCount' => 'setCssIndexCount',
            'cssIndexFieldCount' => 'setCssIndexFieldCount',
            'namespaceCount' => 'setNamespaceCount',
            'gesVertexCount' => 'setGesVertexCount',
            'gesEdgeCount' => 'setGesEdgeCount',
            'databaseCount' => 'setDatabaseCount',
            'streamCount' => 'setStreamCount',
            'tableCount' => 'setTableCount',
            'dataSize' => 'setDataSize',
            'databases' => 'setDatabases',
            'folders' => 'setFolders',
            'cssIndices' => 'setCssIndices',
            'namespaces' => 'setNamespaces',
            'disStreams' => 'setDisStreams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * datasourceName  数据连接名称
    * datasourceType  数据连接类型
    * datasourceGuid  数据连接guid
    * datasourceQualifiedName  数据连接唯一标识名称
    * obsFolderCount  obs目录数
    * obsFileCount  obs文件数
    * cssIndexCount  css索引数
    * cssIndexFieldCount  css 索引字段数目
    * namespaceCount  命名空间数
    * gesVertexCount  ges点的总数
    * gesEdgeCount  ges边的总数
    * databaseCount  数据库总数
    * streamCount  通道总数
    * tableCount  表总数
    * dataSize  数据大小
    * databases  数据库统计信息
    * folders  顶层目录统计信息
    * cssIndices  css索引统计信息
    * namespaces  命名空间统计信息
    * disStreams  通道统计信息
    *
    * @var string[]
    */
    protected static $getters = [
            'datasourceName' => 'getDatasourceName',
            'datasourceType' => 'getDatasourceType',
            'datasourceGuid' => 'getDatasourceGuid',
            'datasourceQualifiedName' => 'getDatasourceQualifiedName',
            'obsFolderCount' => 'getObsFolderCount',
            'obsFileCount' => 'getObsFileCount',
            'cssIndexCount' => 'getCssIndexCount',
            'cssIndexFieldCount' => 'getCssIndexFieldCount',
            'namespaceCount' => 'getNamespaceCount',
            'gesVertexCount' => 'getGesVertexCount',
            'gesEdgeCount' => 'getGesEdgeCount',
            'databaseCount' => 'getDatabaseCount',
            'streamCount' => 'getStreamCount',
            'tableCount' => 'getTableCount',
            'dataSize' => 'getDataSize',
            'databases' => 'getDatabases',
            'folders' => 'getFolders',
            'cssIndices' => 'getCssIndices',
            'namespaces' => 'getNamespaces',
            'disStreams' => 'getDisStreams'
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
        $this->container['datasourceName'] = isset($data['datasourceName']) ? $data['datasourceName'] : null;
        $this->container['datasourceType'] = isset($data['datasourceType']) ? $data['datasourceType'] : null;
        $this->container['datasourceGuid'] = isset($data['datasourceGuid']) ? $data['datasourceGuid'] : null;
        $this->container['datasourceQualifiedName'] = isset($data['datasourceQualifiedName']) ? $data['datasourceQualifiedName'] : null;
        $this->container['obsFolderCount'] = isset($data['obsFolderCount']) ? $data['obsFolderCount'] : null;
        $this->container['obsFileCount'] = isset($data['obsFileCount']) ? $data['obsFileCount'] : null;
        $this->container['cssIndexCount'] = isset($data['cssIndexCount']) ? $data['cssIndexCount'] : null;
        $this->container['cssIndexFieldCount'] = isset($data['cssIndexFieldCount']) ? $data['cssIndexFieldCount'] : null;
        $this->container['namespaceCount'] = isset($data['namespaceCount']) ? $data['namespaceCount'] : null;
        $this->container['gesVertexCount'] = isset($data['gesVertexCount']) ? $data['gesVertexCount'] : null;
        $this->container['gesEdgeCount'] = isset($data['gesEdgeCount']) ? $data['gesEdgeCount'] : null;
        $this->container['databaseCount'] = isset($data['databaseCount']) ? $data['databaseCount'] : null;
        $this->container['streamCount'] = isset($data['streamCount']) ? $data['streamCount'] : null;
        $this->container['tableCount'] = isset($data['tableCount']) ? $data['tableCount'] : null;
        $this->container['dataSize'] = isset($data['dataSize']) ? $data['dataSize'] : null;
        $this->container['databases'] = isset($data['databases']) ? $data['databases'] : null;
        $this->container['folders'] = isset($data['folders']) ? $data['folders'] : null;
        $this->container['cssIndices'] = isset($data['cssIndices']) ? $data['cssIndices'] : null;
        $this->container['namespaces'] = isset($data['namespaces']) ? $data['namespaces'] : null;
        $this->container['disStreams'] = isset($data['disStreams']) ? $data['disStreams'] : null;
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
    * Gets datasourceName
    *  数据连接名称
    *
    * @return string|null
    */
    public function getDatasourceName()
    {
        return $this->container['datasourceName'];
    }

    /**
    * Sets datasourceName
    *
    * @param string|null $datasourceName 数据连接名称
    *
    * @return $this
    */
    public function setDatasourceName($datasourceName)
    {
        $this->container['datasourceName'] = $datasourceName;
        return $this;
    }

    /**
    * Gets datasourceType
    *  数据连接类型
    *
    * @return string|null
    */
    public function getDatasourceType()
    {
        return $this->container['datasourceType'];
    }

    /**
    * Sets datasourceType
    *
    * @param string|null $datasourceType 数据连接类型
    *
    * @return $this
    */
    public function setDatasourceType($datasourceType)
    {
        $this->container['datasourceType'] = $datasourceType;
        return $this;
    }

    /**
    * Gets datasourceGuid
    *  数据连接guid
    *
    * @return string|null
    */
    public function getDatasourceGuid()
    {
        return $this->container['datasourceGuid'];
    }

    /**
    * Sets datasourceGuid
    *
    * @param string|null $datasourceGuid 数据连接guid
    *
    * @return $this
    */
    public function setDatasourceGuid($datasourceGuid)
    {
        $this->container['datasourceGuid'] = $datasourceGuid;
        return $this;
    }

    /**
    * Gets datasourceQualifiedName
    *  数据连接唯一标识名称
    *
    * @return string|null
    */
    public function getDatasourceQualifiedName()
    {
        return $this->container['datasourceQualifiedName'];
    }

    /**
    * Sets datasourceQualifiedName
    *
    * @param string|null $datasourceQualifiedName 数据连接唯一标识名称
    *
    * @return $this
    */
    public function setDatasourceQualifiedName($datasourceQualifiedName)
    {
        $this->container['datasourceQualifiedName'] = $datasourceQualifiedName;
        return $this;
    }

    /**
    * Gets obsFolderCount
    *  obs目录数
    *
    * @return int|null
    */
    public function getObsFolderCount()
    {
        return $this->container['obsFolderCount'];
    }

    /**
    * Sets obsFolderCount
    *
    * @param int|null $obsFolderCount obs目录数
    *
    * @return $this
    */
    public function setObsFolderCount($obsFolderCount)
    {
        $this->container['obsFolderCount'] = $obsFolderCount;
        return $this;
    }

    /**
    * Gets obsFileCount
    *  obs文件数
    *
    * @return int|null
    */
    public function getObsFileCount()
    {
        return $this->container['obsFileCount'];
    }

    /**
    * Sets obsFileCount
    *
    * @param int|null $obsFileCount obs文件数
    *
    * @return $this
    */
    public function setObsFileCount($obsFileCount)
    {
        $this->container['obsFileCount'] = $obsFileCount;
        return $this;
    }

    /**
    * Gets cssIndexCount
    *  css索引数
    *
    * @return int|null
    */
    public function getCssIndexCount()
    {
        return $this->container['cssIndexCount'];
    }

    /**
    * Sets cssIndexCount
    *
    * @param int|null $cssIndexCount css索引数
    *
    * @return $this
    */
    public function setCssIndexCount($cssIndexCount)
    {
        $this->container['cssIndexCount'] = $cssIndexCount;
        return $this;
    }

    /**
    * Gets cssIndexFieldCount
    *  css 索引字段数目
    *
    * @return int|null
    */
    public function getCssIndexFieldCount()
    {
        return $this->container['cssIndexFieldCount'];
    }

    /**
    * Sets cssIndexFieldCount
    *
    * @param int|null $cssIndexFieldCount css 索引字段数目
    *
    * @return $this
    */
    public function setCssIndexFieldCount($cssIndexFieldCount)
    {
        $this->container['cssIndexFieldCount'] = $cssIndexFieldCount;
        return $this;
    }

    /**
    * Gets namespaceCount
    *  命名空间数
    *
    * @return int|null
    */
    public function getNamespaceCount()
    {
        return $this->container['namespaceCount'];
    }

    /**
    * Sets namespaceCount
    *
    * @param int|null $namespaceCount 命名空间数
    *
    * @return $this
    */
    public function setNamespaceCount($namespaceCount)
    {
        $this->container['namespaceCount'] = $namespaceCount;
        return $this;
    }

    /**
    * Gets gesVertexCount
    *  ges点的总数
    *
    * @return int|null
    */
    public function getGesVertexCount()
    {
        return $this->container['gesVertexCount'];
    }

    /**
    * Sets gesVertexCount
    *
    * @param int|null $gesVertexCount ges点的总数
    *
    * @return $this
    */
    public function setGesVertexCount($gesVertexCount)
    {
        $this->container['gesVertexCount'] = $gesVertexCount;
        return $this;
    }

    /**
    * Gets gesEdgeCount
    *  ges边的总数
    *
    * @return int|null
    */
    public function getGesEdgeCount()
    {
        return $this->container['gesEdgeCount'];
    }

    /**
    * Sets gesEdgeCount
    *
    * @param int|null $gesEdgeCount ges边的总数
    *
    * @return $this
    */
    public function setGesEdgeCount($gesEdgeCount)
    {
        $this->container['gesEdgeCount'] = $gesEdgeCount;
        return $this;
    }

    /**
    * Gets databaseCount
    *  数据库总数
    *
    * @return int|null
    */
    public function getDatabaseCount()
    {
        return $this->container['databaseCount'];
    }

    /**
    * Sets databaseCount
    *
    * @param int|null $databaseCount 数据库总数
    *
    * @return $this
    */
    public function setDatabaseCount($databaseCount)
    {
        $this->container['databaseCount'] = $databaseCount;
        return $this;
    }

    /**
    * Gets streamCount
    *  通道总数
    *
    * @return int|null
    */
    public function getStreamCount()
    {
        return $this->container['streamCount'];
    }

    /**
    * Sets streamCount
    *
    * @param int|null $streamCount 通道总数
    *
    * @return $this
    */
    public function setStreamCount($streamCount)
    {
        $this->container['streamCount'] = $streamCount;
        return $this;
    }

    /**
    * Gets tableCount
    *  表总数
    *
    * @return int|null
    */
    public function getTableCount()
    {
        return $this->container['tableCount'];
    }

    /**
    * Sets tableCount
    *
    * @param int|null $tableCount 表总数
    *
    * @return $this
    */
    public function setTableCount($tableCount)
    {
        $this->container['tableCount'] = $tableCount;
        return $this;
    }

    /**
    * Gets dataSize
    *  数据大小
    *
    * @return int|null
    */
    public function getDataSize()
    {
        return $this->container['dataSize'];
    }

    /**
    * Sets dataSize
    *
    * @param int|null $dataSize 数据大小
    *
    * @return $this
    */
    public function setDataSize($dataSize)
    {
        $this->container['dataSize'] = $dataSize;
        return $this;
    }

    /**
    * Gets databases
    *  数据库统计信息
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Database[]|null
    */
    public function getDatabases()
    {
        return $this->container['databases'];
    }

    /**
    * Sets databases
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Database[]|null $databases 数据库统计信息
    *
    * @return $this
    */
    public function setDatabases($databases)
    {
        $this->container['databases'] = $databases;
        return $this;
    }

    /**
    * Gets folders
    *  顶层目录统计信息
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ObsFolder[]|null
    */
    public function getFolders()
    {
        return $this->container['folders'];
    }

    /**
    * Sets folders
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ObsFolder[]|null $folders 顶层目录统计信息
    *
    * @return $this
    */
    public function setFolders($folders)
    {
        $this->container['folders'] = $folders;
        return $this;
    }

    /**
    * Gets cssIndices
    *  css索引统计信息
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CssIndex[]|null
    */
    public function getCssIndices()
    {
        return $this->container['cssIndices'];
    }

    /**
    * Sets cssIndices
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CssIndex[]|null $cssIndices css索引统计信息
    *
    * @return $this
    */
    public function setCssIndices($cssIndices)
    {
        $this->container['cssIndices'] = $cssIndices;
        return $this;
    }

    /**
    * Gets namespaces
    *  命名空间统计信息
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModelNamespace[]|null
    */
    public function getNamespaces()
    {
        return $this->container['namespaces'];
    }

    /**
    * Sets namespaces
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ModelNamespace[]|null $namespaces 命名空间统计信息
    *
    * @return $this
    */
    public function setNamespaces($namespaces)
    {
        $this->container['namespaces'] = $namespaces;
        return $this;
    }

    /**
    * Gets disStreams
    *  通道统计信息
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DisStream[]|null
    */
    public function getDisStreams()
    {
        return $this->container['disStreams'];
    }

    /**
    * Sets disStreams
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DisStream[]|null $disStreams 通道统计信息
    *
    * @return $this
    */
    public function setDisStreams($disStreams)
    {
        $this->container['disStreams'] = $disStreams;
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

